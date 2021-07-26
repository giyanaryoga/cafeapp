<?php

namespace App\Controllers;

class StatusPesanan extends BaseController
{
    protected $statusPesananModel;

    public function index()
    {
        $statusPesanan = $this->statusPesananModel->findAll();
        $data = [
            'title' => 'Daftar Status Pesanan',
            'statusPesanan' => $statusPesanan
        ];
        return view('back/admin/statusPesanan', $data);
    }
}
