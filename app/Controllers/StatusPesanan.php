<?php

namespace App\Controllers;

class StatusPesanan extends BaseController
{
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
