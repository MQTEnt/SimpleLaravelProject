<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AuthFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'email' => 'required|email',
			'password' => 'required' 
		];
	}
	public function messages()
	{
		//Xu ly hien thi loi
		return [
			'email.required' => 'Fill email',
			'password.required' => 'Fill password'
		];
	}

}
