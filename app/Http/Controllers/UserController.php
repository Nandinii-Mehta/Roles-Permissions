<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('role-permission.users.manage-users', compact(['users']));
    }
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('role-permission.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required'
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // Assign roles to the user
        $user->syncRoles($request->role); // This will assign the selected roles
        return redirect()->route('users.index');
    }


    public function edit($id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);
        return view('role-permission.users.edit', compact(['user', 'roles']));
    }

    public function update($id, Request $request)
    {
        // dd($request->all());
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id, // Make sure email is unique except for the current user
            'password' => 'nullable|string|min:8', // Optional password field
            'role' => 'required' // Ensure that roles are selected
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update user details (don't update password if not provided)
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->filled('password') ? Hash::make($request->password) : $user->password, // Update password if provided
        ]);

        // Sync the selected roles using the role_user pivot table
        $user->syncRoles($request->role); // Sync the selected roles with the user

        // Redirect back to users index
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('users.index');
    }
}
