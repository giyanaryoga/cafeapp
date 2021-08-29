<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') : 1;
        $data = [
            'title' => 'Data User',
            'user' => $this->userModel->getUser(),
            'pager' => $this->userModel->pager,
            'current' => $currentPage
        ];
        return view('back/admin/user', $data);
    }

    public function detail($username)
    {
        $user = $this->userModel->getUser($username);
        $data = [
            'title' => 'Detail User',
            'user' => $user
        ];

        if (empty($data['user'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $user . ' tidak ditemukan.');
        }

        return view('back/admin/detail-user', $data);
    }

    public function register()
    {
        $role = $this->roleModel->findAll();
        $data = [
            'title' => 'Form Register User',
            'validation' => \Config\Services::validation(),
            'role' => $role
        ];

        return view('back/admin/create-user', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[user.username]|min_length[6]|max_length[50]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => 'Username sudah terdaftar',
                    'min_length' => '{field} minimal 6 karakter',
                    'max_length' => '{field} maksimal 50 karakter'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} minimal 4 karakter',
                    'max_length' => '{field} maksimal 50 karakter'
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi password tidak sama dengan password'
                ]
            ],
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong dan harap dipilih'
                ]
            ]
        ])) {
            return redirect()->to('/admin/user/register')->withInput();
        }

        $selected_role = $_POST['role'];

        $this->userModel->insert([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'email' => $this->request->getVar('email'),
            'name' => $this->request->getVar('name'),
            'id_role' => $selected_role
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/user');
    }

    public function delete($id)
    {
        //cari gambar berdasarkan id
        $user = $this->userModel->find($id);

        $this->userModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/user');
    }

    public function editUser($username)
    {
        $role = $this->roleModel->findAll();

        $data = [
            'title' => 'Form Edit User',
            'validation' => \Config\Services::validation(),
            'user' => $this->userModel->getUser($username),
            'role' => $role
        ];

        return view('/back/admin/edit-user', $data);
    }

    public function update($id)
    {
        //validasi input
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[user.username,id,' . $id . ']|min_length[6]|max_length[50]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => 'Username sudah terdaftar',
                    'min_length' => '{field} minimal 6 karakter',
                    'max_length' => '{field} maksimal 50 karakter'
                ]
            ],
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong dan harap dipilih'
                ]
            ]
        ])) {
            return redirect()->to('/admin/user/edit/' . $this->request->getVar('username'))->withInput();
        }
        $selected_role = $_POST['role'];
        $this->userModel->save([
            'id' => $id,
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'name' => $this->request->getVar('name'),
            'id_role' => $selected_role
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin/user');
    }

    public function changePassword($username)
    {
        $data = [
            'title' => 'Form Change Password',
            'validation' => \Config\Services::validation(),
            'user' => $this->userModel->getUser($username)
        ];

        return view('/back/user/change-password', $data);
    }

    public function changes($id)
    {
        //validasi input
        if (!$this->validate([
            'current_password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Field harus diisi',
                ]
            ],
            'new_password1' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => 'Field harus diisi',
                    'min_length' => 'Field minimal 4 karakter',
                    'max_length' => 'Field maksimal 50 karakter'
                ]
            ],
            'new_password2' => [
                'rules' => 'matches[new_password1]',
                'errors' => [
                    'matches' => 'Konfirmasi password tidak sama dengan password'
                ]
            ]
        ])) {
            return redirect()->to('/user/changepassword/' . $this->request->getVar('username'))->withInput();
        }

        $username = $this->request->getVar('username');
        $dataUser = $this->userModel->where(['username' => $username]);
        dd($dataUser);
        $current_pass = $this->request->getVar('current_password');
        $new_pass = $this->request->getVar('new_password1');

        if (!password_verify($current_pass, $dataUser['password'])) {
            session()->setFlashdata('pesan-gagal', 'Wrong password.');
            return redirect()->to('/user/changepassword/' . $this->request->getVar('username'));
        }
        if ($current_pass == $new_pass) {
            session()->setFlashdata('pesan-gagal', 'New password cannot be the same as current password.');
            return redirect()->to('/user/changepassword/' . $this->request->getVar('username'));
        } else {
            $password_hash = password_hash($new_pass, PASSWORD_DEFAULT);
            $this->userModel->update([
                'id' => $id,
                'password' => $password_hash,
            ]);
            session()->setFlashdata('pesan', 'Password berhasil diubah.');
        }

        return redirect()->to('/user');
    }
}
