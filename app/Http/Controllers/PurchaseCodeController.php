<?php

namespace App\Http\Controllers;

use App\Models\PurchaseCodeVerifier;
use Illuminate\Http\Request;

class PurchaseCodeController extends Controller
{
    public function index(){
        $data=PurchaseCodeVerifier::paginate(5);
        return view('purchase-code.index',compact('data'));
    }
}
