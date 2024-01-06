<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterAdminController extends Controller
{
    public function showRegisterAdmin()
    {
        return view('admins.register');
    }

    public function registerAdmin(Request $request)
    {
        $registerFields = $request->validate([
            'first_name' => ['required','max:20'],
            'last_name' => ['required','max:20'],
            'admin_email' => ['required','email','unique:users'],
            'password' =>['required','confirmed','max:16',Password::min(8)->mixedCase()->symbols()->letters()],
        ],[
            'admin_email.required' => 'وارد کردن ایمیل الزامی است'
        ]);
        User::create($registerFields);
        return 'Done';
    }
}
