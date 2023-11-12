<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class savingController extends Controller
{


    public function savingPlan(){
        return view('saving.plan');
    }
    public function savingPending(){
        return view('saving.active');
    }

    public function savingActive(){
        return view('saving.paid');
    }
    public function savingClose(){
        return view('saving.close');
    }
    public function savingAll(){
        return view('saving.all');
    }
}
