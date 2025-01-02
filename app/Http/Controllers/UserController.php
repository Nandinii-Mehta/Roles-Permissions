<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('role-permission.users.manage-users', compact('users'));
    }
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('role-permission.users.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|max:20',
            'role' => 'required'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->syncRoles($request->role);
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $roles = Role::pluck('name', 'name')->all();
        $user = User::findOrFail($id);
        return view('role-permission.users.edit', compact(['user', 'roles']));
    }
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('users.index');
    }
}
