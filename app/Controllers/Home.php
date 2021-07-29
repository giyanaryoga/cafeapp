<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Gya Cafe',
			'page' => 'Home'
		];
		return view('/front/index', $data);
	}
	public function order()
	{
		$data = [
			'title' => 'Order Page',
			'page' => 'Order'
		];
		return view('/front/customer/register', $data);
	}
}
