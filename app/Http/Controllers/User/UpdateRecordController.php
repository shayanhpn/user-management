<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class UpdateRecordController extends Controller
{
    public function showUpdate(Record $id)
    {
        return view('users.update-record',['record' => $id]);
    }
}
