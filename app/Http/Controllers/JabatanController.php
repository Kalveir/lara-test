<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class JabatanController extends Controller
{
    public function index()
    {
        // $jabatan = Role::where('name','not like','%auditor%')->get();
        $jabatan = Role::get();
        $permission = Permission::get();
        return view('page.jabatan.jabatan',compact('jabatan','permission'));
    }

    public function create()
    {
        $permission = Permission::distinct()->get();
        return view('page.jabatan.add',compact('permission'));
    }

    public function store(Request $request)
    {
        $permissions = $request->akses;

        $role = Role::create(['name' => $request->name]);

        // Pastikan $permissions tidak kosong sebelum melakukan iterasi
        if ($permissions) {
            foreach ($permissions as $permission) {
                $role->givePermissionTo(['name' => $permission]);
            }
        }
        return redirect()->route('jabatan.index');
    }

    public function edit( $id)
    {
        $jabatan = Role::findById($id);
        $permission = Permission::all();
        return view('page.jabatan.edit',compact('jabatan','permission'));
        
    }

    public function update(Request $request, $jabatan)
    {
        $role = Role::findById($jabatan);

        // Update the role's name if needed
        $role->update([
            'name' => $request->name,
        ]);

        // Sync the permissions for the role
        $permissions = $request->akses;
        $role->syncPermissions($permissions);
        return redirect()->route('jabatan.index');
    }

    public function destroy($jabatan)
    {
        $jabatan = Role::findById($jabatan);
        $jabatan->syncPermissions([]);
        $jabatan->delete();
        return redirect()->route('jabatan.index'); 
    }
}
