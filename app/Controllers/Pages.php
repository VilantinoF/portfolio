<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'tittle' => 'Vilantino Fernandion'
		];

		return view('pages/home', $data);
	}
	public function about()
	{
		return view('pages/about');
	}
}
