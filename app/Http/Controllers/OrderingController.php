<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderingController extends Controller
{
    public function ordering(){
        return view('ordering/order');
    }
    public function login(){
        return view('ordering/login');
    }
    public function sigin(){
        return view('ordering/sigin');
    }
}
