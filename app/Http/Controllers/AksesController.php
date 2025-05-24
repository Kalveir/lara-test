<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class AksesController extends Controller
{
    public function store(Request $request){
        Permission::create(['name' => $request->name]);
        return redirect()->route('jabatan.index');
    }

    public function update(Request $request, $id){
        $permission = Permission::find($id);
        if ($permission){
            $permission->name = $request->name;
            $permission->save();
            return redirect()->route('jabatan.index');
        }else{
            return redirect()->route('jabatan.index');
        }
    }

    public function destroy($id){
        $permission = Permission::find($id);
        if ($permission){
            $permission->delete();
            return redirect()->route('jabatan.index');
        }else{
            return redirect()->route('jabatan.index');
        }
    }
}
