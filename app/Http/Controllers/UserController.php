<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('manage-users',compact('users'));
    }
    public function destroy($id){
        $users=User::find($id);
        $users->delete();
        return redirect()->route('manage-users');
    }
}
