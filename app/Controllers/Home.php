<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Gya Cafe'
		];
		return view('welcome_message', $data);
	}
}
