<?php

namespace App\Laravel\Controllers\Frontend;

/*
 * Request Validator
 */

use App\Laravel\Requests\PageRequest;

class MainController extends Controller
{

	protected $data = [];

	public function __construct()
	{
		parent::__construct();
		array_merge($this->data, parent::get_data());
	}

	public function index()
	{
		return view('frontend.index');
	}


	public function product()
	{
		return view('frontend.product');
	}

	public function solutions()
	{
		return view('frontend.solution');
	}

	public function clients()
	{
		return view('frontend.clients');
	}

	public function about()
	{
		return view('frontend.about');
	}

	public function contact()
	{
		return view('frontend.contact');
	}
}
