<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Gya Cafe'
		];
		return view('/front/index', $data);
	}
}
