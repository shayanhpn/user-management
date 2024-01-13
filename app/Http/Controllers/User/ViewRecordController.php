<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewRecordController extends Controller
{
    public function viewRecord()
    {
        return view('users.view-record');
    }
}
