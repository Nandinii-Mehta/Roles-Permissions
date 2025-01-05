<?php

namespace App\Http\Controllers;

use App\Models\EnlvItemsMaster;
use App\Models\PurchaseCodeVerifier;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class EnlvItemsMasterController extends Controller
{
    public function home()
    {
        // $item = EnlvItemsMaster::all();
        $license = PurchaseCodeVerifier::get('license');
        $val_lic = DB::table('enlv_purchase_code_verifier')->select('license')->where('last_validate_request', '!=', NULL);

        $items = DB::table('enlv_items_master')
            ->leftJoin('enlv_product_versions', 'enlv_items_master.item_id', '=', 'enlv_product_versions.pid')
            ->select('enlv_items_master.id', 'enlv_items_master.item_id', 'enlv_items_master.image_thumbnail_link', 'enlv_items_master.license_update', 'enlv_items_master.item_name', 'enlv_items_master.category', 'enlv_product_versions.version')
            ->get();

        return view('items.home', compact(['items', 'license', 'val_lic']));
    }
    public function index()
    {
        $items = DB::table('enlv_items_master')
            ->leftJoin('enlv_product_versions', 'enlv_items_master.item_id', '=', 'enlv_product_versions.pid')
            ->select('enlv_items_master.id', 'enlv_items_master.item_id', 'enlv_items_master.item_name', 'enlv_items_master.category', 'enlv_product_versions.version')
            ->paginate(5);

        // $items = EnlvItemsMaster::simplePaginate(5);
        return view('items.index', compact('items'));
    }
    public function create()
    {
        return view('items.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        EnlvItemsMaster::create($request->all());
        return redirect()->route('items.index');
    }
}



// SELECT i.id,i.item_id,i.item_name,i.category,v.version FROM enlv_items_master i LEFT JOIN enlv_product_versions v ON i.item_id=v.pid;
