<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Login'
		];
		return view('back/auth/login', $data);
	}

	public function login()
	{
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');
		$dataUser = $this->userModel->where(['username' => $username])->first();

		if ($dataUser) {
			if (password_verify($password, $dataUser['password'])) {
				$id = $dataUser['id_role'];
				switch ($id) {
					case '1':
						session()->set([
							'username' => $dataUser['username'],
							'name' => $dataUser['name'],
							'role' => $dataUser['id_role'],
							'logged_in' => true
						]);
						return redirect()->to(base_url('admin/'));
						break;
					case '2':
						session()->set([
							'username' => $dataUser['username'],
							'name' => $dataUser['name'],
							'role' => $dataUser['id_role'],
							'logged_in' => true
						]);
						return redirect()->to(base_url('user/'));
						break;
					default:
						// session()->getFlashdata('error', 'Username & Password Salah');
						return redirect()->back();
						break;
				}
			}
		} else {
			session()->getFlashdata('error', 'Username & Password Salah');
			return redirect('/login');
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/login');
	}
}
