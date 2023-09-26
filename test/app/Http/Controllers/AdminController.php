<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function society()
    {
        return view('admin.society');
    }
    public function member()
    {
        return view('admin.member');
    }
    public function loadApply()
    {
        return view('admin.loadApply');
    }
    public function loanCollection()
    {
        return view('admin.loanCollection');
    }

    public function shareCollection()
    {
        return view('admin.shareCollection');
    }
    public function denytoApprove()
    {
        return view('admin.denytoApprove');
    }
}
