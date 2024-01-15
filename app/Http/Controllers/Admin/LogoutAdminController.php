<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LogoutAdminController extends Controller
{
    public function showLogoutUser(User $id)
    {
        return view('auth.logout',['user' => $id]);
    }

    public function logoutUser()
    {
        auth()->logout();
        return view('main-page');
    }
}
