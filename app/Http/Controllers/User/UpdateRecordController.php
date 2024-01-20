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
    public function updateRecord(Request $request,Record $record)
    {
        $updateFields = $request->validate([
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
        $record->update($updateFields);
        return back()->with('success','اطلاعات شما با موفقیت بروز شد');
    }
}
