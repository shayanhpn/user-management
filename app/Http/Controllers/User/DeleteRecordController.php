<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class DeleteRecordController extends Controller
{
    public function deleteRecord(Record $id)
    {
        $id->delete();
        session()->flash('danger','رکورد مورد نظر حذف شد');
        return response()->json(['success' => true]);
    }
}
