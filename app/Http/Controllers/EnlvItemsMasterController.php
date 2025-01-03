<?php

namespace App\Http\Controllers;

use App\Models\EnlvItemsMaster;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class EnlvItemsMasterController extends Controller
{
    public function home()
    {
        $items = EnlvItemsMaster::all();
        return view('items.home');
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
}

// SELECT i.id,i.item_id,i.item_name,i.category,v.version FROM enlv_items_master i LEFT JOIN enlv_product_versions v ON i.item_id=v.pid;