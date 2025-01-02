<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role-permission.role.index', compact('roles'));
    }
    public function create()
    {
        return view('role-permission.role.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name'
            ]
        ]);

        Role::create([
            'name' => $request->name
        ]);
        return redirect()->route('roles.index')->with('status', 'Role Created Successfully');
    }
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('role-permission.role.edit', compact('role'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name,' . $id
            ]
        ]);
        $roles = Role::findOrFail($id);
        $roles->update([
            'name' => $request->name
        ]);
        return redirect()->route('roles.index')->with('status', 'Role Updated Successfully');
    }
    public function destroy($id)
    {
        $roles = Role::findOrFail($id);
        $roles->delete();
        return redirect()->route('roles.index')->with('status', 'Role Deleted Successfully');
    }
    public function addPermissionToRole($id)
    {
        $permissions = Permission::all();
        $role = Role::findOrFail($id);
        return view('role-permission.role.add-permissions', compact(['role', 'permissions']));
    }

    public function givePermissionToRole($id, Request $request)
    {
        $request->validate([
            'permission' => 'required'
        ]);

        $role = Role::findOrFail($id);
        $role->syncPermissions($request->permission);
    }
}
