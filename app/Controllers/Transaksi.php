<?php

namespace App\Controllers;

class Transaksi extends BaseController
{
    public function index()
    {
        $currentPage = $this->request->getVar('page_transaksi') ? $this->request->getVar('page_transaksi') : 1;
        $data = [
            'title' => 'Data Transaksi',
            'transaksi' => $this->transaksiModel->paginate(3, 'transaksi'),
            'pager' => $this->transaksiModel->pager,
            'current' => $currentPage
        ];
        return view('back/admin/transaksi', $data);
    }
}
