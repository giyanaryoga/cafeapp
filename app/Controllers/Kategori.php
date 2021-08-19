<?php

namespace App\Controllers;

class Kategori extends BaseController
{
    public function index()
    {
        $currentPage = $this->request->getVar('page_menu') ? $this->request->getVar('page_menu') : 1;
        $kategori = $this->kategoriModel->paginate(3, 'kategori');
        $data = [
            'title' => 'Daftar Kategori',
            'kategori' => $kategori,
            'pager' => $this->kategoriModel->pager,
            'current' => $currentPage
        ];
        return view('back/admin/kategori-menu', $data);
    }

    public function save()
    {
        $namaKategori = $this->request->getVar('name');

        $this->kategoriModel->save([
            'namaKategori' => $namaKategori
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/kategori');
    }

    public function delete($id)
    {
        $this->kategoriModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/kategori');
    }

    public function editKategori($id)
    {
        $data = [
            'title' => 'Form Edit Kategori',
            'kategori' => $this->kategoriModel->find($id)
        ];

        return view('/back/admin/edit-kategori', $data);
    }

    public function update($id)
    {
        $namaKategori = $this->request->getVar('name');

        $this->kategoriModel->save([
            'id' => $id,
            'namaKategori' => $namaKategori
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin/kategori');
    }
}
