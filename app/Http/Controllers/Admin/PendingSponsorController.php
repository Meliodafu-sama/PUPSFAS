<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendingSponsorController extends Controller
{
    public function individual() {
        return view('admin.individual');
    }

    public function company(){
    	return view('admin.company');
    }
}
