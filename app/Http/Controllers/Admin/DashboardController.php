<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $records = Record::orderBy('created_at')->paginate(5);
        $userCount = User::all()->count();
        $recordCount = Record::all()->count();
        $counter = 1;
        return view('admins.dashboard',compact('records','counter','recordCount','userCount'));
    }


}
