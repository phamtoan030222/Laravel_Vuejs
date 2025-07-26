<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(){

    }

    public function index(){
        return view('backend.auth.login');
    }

    public function login(AuthRequest $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('dashboard.index')->with('success','Đăng nhập thành công.');
    }

    // Đăng nhập thất bại
    return redirect()->route('auth.admin')->with('error','Email hoặc Mật khẩu không chính xác.');
}

}

