<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // $user = User::with('roles')->whereDoesntHave('roles', function ($query) {
        //             $query->where('name', 'Admin');
        //         })->get();
        $user = User::with('roles')->get();
        return view('page.user.user', compact('user'));
    }

    public function create()
    {
        // $jabatan = Role::where('name','not like','%auditor%')->where('name','not like','%Admin%')->orderBy('id', 'desc')->get();
        $jabatan = Role::get();
        return view('page.user.add', compact('jabatan'));
    }
    public function store(Request $request)
    {
        $duplikat = User::where('email', $request->email)->first();
        if($duplikat)
        {
            return redirect()->route('user.index');
        }else
        {
            $user = new User;
            $user->name= $request->name;
            $user->email= $request->email;
            $user->password= bcrypt($request->password);
            $user->save();

            $role = Role::findById($request->jabatan_id);
            $user->assignRole($role);
            return redirect()->route('user.index');
        }

    }

    public function edit($user)
    {
        $user = User::find($user);
        $jabatan = Role::get();
        return view('page.user.edit', compact('user','jabatan'));
    }

    public function update(Request $request, $user)
    {
        $user = User::find($user);
        if($request->email != $user->email){
            $cek_email = User::where('email',$request->email)->first();
            if($cek_email){
                return back();
            }else{
                    $user->name= $request->name;
                    $user->email= $request->email;
                    if (!empty($request->password ))
                    {
                        $user->password= bcrypt($request->password);
                    }
                    $user->save();
            }

        }
        $role = Role::findById($request->jabatan_id);
        $user->syncRoles([$role->id]);
        return redirect()->route('user.index');
    }
    public function destroy($user)
    {
        $pegawai = User::find($user);
        if($pegawai){
            try{
                $pegawai->syncRoles([]);
                $pegawai->delete();
                return redirect()->route('user.index');
            }catch(\Exception $e)
            {
                return redirect()->route('user.index');
            }
        }

    }

}
