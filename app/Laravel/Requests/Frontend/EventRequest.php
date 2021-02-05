<?php

namespace App\Laravel\Requests\Frontend;

use Session, Auth;
use App\Laravel\Requests\RequestManager;

class EventRequest extends RequestManager
{

	public function rules()
	{

		$rules = [
			'name' => "required|min:1",
			'company' => "required|min:1",
			'email' => "required|min:1",
			'phone' => "required|min:1",
			'message' => "required|min:1",
		];

		return $rules;
	}

	public function messages()
	{
		return [
			'required'	=> "Field is required.",
			'title.min' => "Input is too short."
		];
	}
}
