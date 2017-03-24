<?php

namespace App\Http\Controllers\AdminAuth;

use App\Models\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return Admin::create(['name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),]);
    }




    public function showRegistrationForm()
    {
        return view('admin.user.insert');
    }


    public function getListAdmin()
    {
        return view('admin.user.listing');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
