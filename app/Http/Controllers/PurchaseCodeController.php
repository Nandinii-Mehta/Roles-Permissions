<?php

namespace App\Http\Controllers;

use App\Models\PurchaseCodeVerifier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseCodeController extends Controller
{
    public function index(){
        $data=DB::table('enlv_items_master as i')
        ->leftJoin('enlv_purchase_code_verifier as p','i.item_id','=','p.item_id')
        ->select('p.id','i.item_id','i.item_name','p.purchase_code','p.installed_version','p.buyer','p.activated_domain','p.last_validate_request')
        ->paginate(10);
        // $data=PurchaseCodeVerifier::paginate(5);
        return view('purchase-code.index',compact('data'));
    }
}

// SELECT i.item_id,i.item_name,p.purchase_code,p.installed_version,p.buyer,p.activated_domain,p.last_validate_request 
// FROM enlv_items_master i 
// JOIN enlv_purchase_code_verifier p 
// ON i.item_id=p.item_id;