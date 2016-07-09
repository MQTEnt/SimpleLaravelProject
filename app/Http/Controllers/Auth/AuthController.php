<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Requests\AuthFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\User;
use Hash;
class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
		$this->middleware('guest', ['except' => 'getLogout']);
	}
	public function getRegister()
	{
		return view('auth.register');
	}
	public function postRegister(RegisterFormRequest $request)
	{
		//Tao tai khoan
		User::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'password' => Hash::make($request->input('password')),
			'remember_token' => $request->input('_token')
		]);
		return view('auth.registerSuccess');
	}
	public function getLogin()
	{
		return view('auth.login');
	}
	public function postLogin(AuthFormRequest $request)
	{
		//Kiem tra login
		$auth = [
			'email' => $request->input('email'), //Su dung 1 trong 2 cach de lay du lieu thu $request
			'password' => $request->password
		];
		//Chi tai khoan co remember_token moi co the dang nhap (attempt()==true)
		if($this->auth->attempt($auth))
		{
			return redirect()->route('product.index');
		}
		else
			return view('auth.loginFail');
	}
}
