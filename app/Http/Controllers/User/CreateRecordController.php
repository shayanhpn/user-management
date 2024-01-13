<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Record;
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
        ],[
            'phone_number.required' => 'تکمیل گزینه شماره تلفن الزامی است',
            'mobile_phone.required' => 'تکمیل گزینه شماره همراه الزامی است',
            'country.required' => 'تکمیل گزینه کشور الزامی است',
            'state.required' => 'تکمیل گزینه استان الزامی است',
            'city.required' => 'تکمیل گزینه شهر الزامی است',
            'address.required' => 'تکمیل گزینه آدرس الزامی است'
        ]);
        Record::create($recordFields);
        return back()->with('success','رکورد مورد نظر با موفقیت ساخته شد');

    }
}
