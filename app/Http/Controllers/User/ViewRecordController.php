<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class ViewRecordController extends Controller
{
    public function viewRecord(Record $id)
    {
        return view('users.view-record',['record' => $id]);
    }
}
