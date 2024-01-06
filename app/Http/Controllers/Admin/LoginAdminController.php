<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function showLoginAdmin()
    {
        return view('auth.login');
    }

    public function loginAdmin(Request $request)
    {
        $loginFields = $request->validate([
            'login_email' => ['required','email'],
            'password' => ['required','min:8']
        ],[
            'login_email.required' => 'وارد کردن ایمیل الزامی است'
        ]);
        if(auth()->attempt(['admin_email' => $loginFields['login_email'],'password' => $loginFields['password']])){
            session()->regenerate();
            return 'Login Successfully';
        }else
        {
            return 'Login Faild';
        }
    }
}
