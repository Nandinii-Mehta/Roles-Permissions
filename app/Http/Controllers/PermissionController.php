<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('role-permission.permission.index', compact('permissions'));
    }
    public function create()
    {
        return view('role-permission.permission.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name'
            ]
        ]);

        Permission::create([
            'name' => $request->name
        ]);
        return redirect()->route('permissions.index')->with('status', 'Permission Created Successfully');
    }
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('role-permission.permission.edit', compact('permission'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name,' . $id
            ]
        ]);
        $permission = Permission::findOrFail($id);
        $permission->update([
            'name' => $request->name
        ]);
        return redirect()->route('permissions.index')->with('status', 'Permission Updated Successfully');
    }
    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();
        return redirect()->route('permissions.index')->with('status', 'Permission Deleted Successfully');
    }
}
