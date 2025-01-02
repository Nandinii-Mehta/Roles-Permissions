<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        //all permissions
        $permissions = Permission::all();

        //specific role id
        $role = Role::findOrFail($id);

        //roleId and permissionId from role_has_permissions table
        //  This is an array of permission IDs associated with a particsular role.
        $rolePermissions = DB::table('role_has_permissions')
            ->where('role_has_permissions.role_id',$role->id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        return view('role-permission.role.add-permissions', compact(['role', 'permissions','rolePermissions']));
    }

    public function givePermissionToRole($id, Request $request)
    {
        $request->validate([
            'permission' => 'required',
            'guard' => 'web'
        ]);

        $role = Role::findOrFail($id);
        $role->syncPermissions($request->permission);

        return redirect()->back()->with('status', 'Permissions added to role');
    }
}
