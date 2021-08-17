<?php

namespace App\Controllers;

class Role extends BaseController
{
    public function index()
    {
        $role = $this->roleModel->findAll();
        $data = [
            'title' => 'Daftar Role',
            'role' => $role
        ];
        return view('back/admin/role', $data);
    }

    // public function save()
    // {
    //     $namaRole = $this->request->getVar('name_role');
    //     $this->roleModel->save([
    //         'name_role' => $namaRole
    //     ]);
    //     session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
    //     return redirect()->to('/admin/role');
    // }
}
