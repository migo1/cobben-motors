<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public function __construct()
    {
        // $this->middleware('permission:role-list', ['only' => ['index']]);
        // $this->middleware('permission:role-create', ['only' => ['store']]);
        // $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $data = Role::when($search, function ($query) use ($search) {
            return $query->where(function ($q) use ($search) {
                return $q->where('name', 'LIKE', '%' . $search . '%');
            });
        })
            ->orderBy('id', 'DESC')
            ->paginate(10)
            ->withQueryString();

        $permissions = Permission::get()->each(function ($items) {
            $group = explode('-', $items->name);
            $items->group = $group[0];
            $items->extracted = $group[1];
        })->groupBy('group');




        return Inertia::render('Roles/index', [
            'roles' => $data,
            'permissions' => $permissions
        ]);
    }

    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get()->pluck('permission_id');

        return response()->json([
            'role' => $role, 'rolePermissions' => $rolePermissions
        ], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));


        return redirect()->route('roles.index')->with('success', 'Role Created Succesfully');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')->with('success', 'Role updated Succesfully');
    }

    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();

        return redirect()->route('roles.index')->with('success', 'Role Deleted Succesfully');
    }
}
