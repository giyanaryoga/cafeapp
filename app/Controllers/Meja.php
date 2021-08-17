<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Meja extends BaseController
{
	public function index()
	{
		$meja = $this->mejaModel->findAll();
		$data = [
			'title' => 'Daftar meja',
			'meja' => $meja
		];
		return view('back/admin/meja', $data);
	}

	public function save()
	{
		$nomor = $this->request->getVar('nomor');
		$deskripsi = $this->request->getVar('deskripsi');

		$this->mejaModel->save([
			'nomor' => $nomor,
			'deskripsi' => $deskripsi
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/admin/meja');
	}

	public function delete($id)
	{
		$this->mejaModel->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');
		return redirect()->to('/admin/meja');
	}

	public function editMeja($id)
	{
		$data = [
			'title' => 'Form Edit Meja',
			'meja' => $this->mejaModel->find($id)
		];

		return view('/back/admin/edit-meja', $data);
	}

	public function update($id)
	{
		$nomor = $this->request->getVar('nomor');
		$deskripsi = $this->request->getVar('deskripsi');

		$this->mejaModel->save([
			'id' => $id,
			'nomor' => $nomor,
			'deskripsi' => $deskripsi
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah.');

		return redirect()->to('/admin/meja');
	}
}
