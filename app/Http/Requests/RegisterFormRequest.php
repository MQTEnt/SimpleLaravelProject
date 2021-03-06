<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterFormRequest extends Request {

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
			'name' => 'required',
			'email' => 'required|unique:users,email',
			'password' => 'required',
			'password_confirmation' => 'required'
		];
	}

}
