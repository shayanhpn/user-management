<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $records = Record::orderBy('created_at')->paginate(10);
        $counter = 1;
        return view('admins.dashboard',compact('records','counter'));
    }


}
