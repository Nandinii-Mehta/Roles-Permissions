<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductVersion;

class ProductVersionController extends Controller
{
    public function index(Request $request)
    {
        $itemid = $request->query('id');
        $data = ProductVersion::where('pid', '=',$itemid)->get();
        return view('versions.index', compact(['data', 'itemid']));
    }
}
