<?php

namespace App\Laravel\Controllers\Frontend;

/*
 * Request Validator
 */

use App\Laravel\Requests\PageRequest;
use App\Laravel\Requests\Frontend\EventRequest;

use App\Laravel\Models\RequestDemo;

class PmtiController extends Controller
{

	protected $data = [];

	public function __construct()
	{
		parent::__construct();
		array_merge($this->data, parent::get_data());
	}

	public function index(PageRequest $request)
	{
	}

	public function create(PageRequest $request)
	{
		return view('frontend.index');
	}

	public function store(EventRequest $request)
	{
		$request_demo = new RequestDemo;
		$request_demo->name = $request->input('name');
		$request_demo->company = $request->input('company');
		$request_demo->email = $request->input('email');
		$request_demo->phone = $request->input('phone');
		$request_demo->message = $request->input('message');
		$request_demo->save();

		session()->flash('notification-status', "success");
		session()->flash('notification-msg', "Success.");


		return redirect()->route('frontend.index');
	}

	public function create_contactUs(PageRequest $request)
	{
		return view('frontend.contact');
	}

	public function store_contactUs(EventRequest $request)
	{
		$request_demo = new RequestDemo;
		$request_demo->name = $request->input('name');
		$request_demo->company = $request->input('company');
		$request_demo->email = $request->input('email');
		$request_demo->phone = $request->input('phone');
		$request_demo->message = $request->input('message');
		$request_demo->save();

		session()->flash('notification-status', "success");
		session()->flash('notification-msg', "Success.");


		return redirect()->route('frontend.contact');
	}

	public function edit(PageRequest $request, $id = NULL)
	{
	}

	public function update(EventRequest $request, $id = NULL)
	{
	}

	public function destroy(PageRequest $request, $id = NULL)
	{
	}

	public function view(PageRequest $request, $id = NULL)
	{
		$this->data['requests'] = RequestDemo::orderBy('created_at', "DESC")->get();
		return view('frontend.view_requests', $this->data);
	}

}
