<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
   public function paymentAll(){
    return view('payment.all');
   }
   public function paymentLoan(){
    return view('payment.loan');
   }
   public function paymentSaving(){
    return view('payment.saving');
   }
}
