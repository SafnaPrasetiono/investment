<?php

namespace App\Http\Controllers\admin\transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dealApprovalController extends Controller
{
    //
    public function dealApproval(){
        return view('admin.transaction.dealApproval');
    }
}
