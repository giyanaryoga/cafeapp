<?php

namespace App\Controllers;

class Menu extends BaseController
{
    protected $menuModel;
    protected $kategoriModel;

    // public function __construct()
    // {
    //     $this->MenuModel = new MenuModel();
    //     $this->KategoriModel = new KategoriModel();
    // }

    public function index()
    {
        // $menu = $this->MenuModel->findAll();
        $data = [
            'title' => 'Daftar Menu',
            'menu' => $this->menuModel->getMenu()
        ];
        return view('back/admin/menu', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Menu',
            'menu' => $this->menuModel->getMenu($slug)
        ];

        if (empty($data['menu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('judul komik ' . $slug . ' tidak ditemukan.');
        }

        return view('back/admin/detail-menu', $data);
    }

    public function createMenu()
    {
        $data = [
            'title' => 'Form Tambah Menu',
            'validation' => \Config\Services::validation()
        ];
        return view('back/admin/create-menu', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'namaMenu' => [
                'rules' => 'required|is_unique[menu.namaMenu]',
                'errors' => [
                    'required' => 'field harus diisi.',
                    'is_unique' => 'Nama menu sudah terdaftar'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,5024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang dipilih bukan gambar',
                    'mine_in' => 'Yang dipilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/menu/create')->withInput()->with('validation', $validation);
            return redirect()->to('/menu/create')->withInput();
        }

        //ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        //jika tidak ada file gambar yang diupload
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            //generate nama gambar
            $namaGambar = $fileGambar->getRandomName();
            //pindah ke file public img
            $fileGambar->move('img');
            //ambil nama file ke name
            // $namaGambar = $fileGambar->getName();
        }

        $slug = url_title($this->request->getVar('namaMenu'), '-', true);
        $this->menuModel->save([
            'slug' => $slug,
            'namaMenu' => $this->request->getVar('namaMenu'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $namaGambar,
            'id_status' => $this->request->getVar('id_status')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/menu');
    }

    public function delete($id)
    {
        //cari gambar berdasarkan id
        $menu = $this->menuModel->find($id);
        //cek jika gambarnya default.jpg
        if ($menu['gambar'] != 'default.jpg') {
            unlink('img/' . $menu['gambar']);
        }

        $this->menuModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/menu');
    }

    public function editMenu($slug)
    {
        $data = [
            'title' => 'Form Edit Menu',
            'validation' => \Config\Services::validation(),
            'menu' => $this->menuModel->getMenu($slug)
        ];

        return view('/back/admin/edit-menu', $data);
    }

    public function update($id)
    {
        //validasi input
        if (!$this->validate([
            'namaMenu' => [
                'rules' => 'required|is_unique[menu.namaMenu,id,' . $id . ']',
                'errors' => [
                    'required' => 'field harus diisi.',
                    'is_unique' => 'Nama menu sudah terdaftar'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,5024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang dipilih bukan gambar',
                    'mine_in' => 'Yang dipilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/menu/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        $fileGambarLama = $this->request->getVar('gambarLama');
        //cek jika gambar berubah dari file yang lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $fileGambarLama;
            //jika file yang lama default.jpg
        } else if ($fileGambarLama == 'default.jpg') {
            //generate nama baru
            $namaGambar = $fileGambar->getRandomName();
            //pindahkan gambar ke public img
            $fileGambar->move('img', $namaGambar);
        } else {
            //generate nama baru
            $namaGambar = $fileGambar->getRandomName();
            //pindahkan gambar ke public img
            $fileGambar->move('img', $namaGambar);
            //hapus file yang lama
            unlink('img/' . $fileGambarLama);
        }

        $slug = url_title($this->request->getVar('namaMenu'), '-', true);
        $this->menuModel->save([
            'id' => $id,
            'slug' => $slug,
            'namaMenu' => $this->request->getVar('namaMenu'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $namaGambar,
            'id_status' => $this->request->getVar('id_status')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/menu');
    }
}
