<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateRecordController extends Controller
{
    public function showCreateRecord()
    {
        return view('users.create-record');
    }

    public function createRecord(Request $request)
    {
        $recordFields  = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone_number' => ['required'],
            'mobile_phone' => ['required'],
            'country' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'address' => ['required']
        ]);

    }
}
