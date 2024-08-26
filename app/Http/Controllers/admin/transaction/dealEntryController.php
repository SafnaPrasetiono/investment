<?php

namespace App\Http\Controllers\admin\transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dealEntryController extends Controller
{
    public function fixedIncome()
    {
        return view('admin.transaction.dealentry.fixedIncome');
    }
}
