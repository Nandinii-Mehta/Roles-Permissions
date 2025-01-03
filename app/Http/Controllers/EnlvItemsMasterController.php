<?php

namespace App\Http\Controllers;

use App\Models\EnlvItemsMaster;
use Illuminate\Http\Request;

class EnlvItemsMasterController extends Controller
{
    public function index(){
        $items=EnlvItemsMaster::all();
        return view('items.index');
    }
    public function home(){
        $items=EnlvItemsMaster::all();
        return view('items.home');
    }
}
