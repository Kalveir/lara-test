<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function ProfilInfo($id)
    {
        if(Auth::user()->id == $id)
        {
            $profile = User::where('id', $id)->first();
            return view('page.profile',compact('profile'));
        }else 
        {
            // Alert::error('Gagal', 'Akses Ditolak');
            return back();
        }
        // return $profile;
    }

    public function UpdateProfil(Request $request,$id)
    {
        $profile = User::find(Auth::user()->id);
        if ($request->email != $profile->email)
        {
            $cek_usr = User::where('email',$request->email)->first();
            if($cek_usr)
            {
                // Alert::error('Gagal', 'Email telah terdaftar');
                return redirect()->route('profile.info',Auth::user()->id);
            }else
            {
                $profil = User::find(Auth::user()->id);
                $profil->name = $request->name;
                $profil->email = $request->email;
                if(!empty($request->password ))
                {
                    $profil->password = bcrypt($request->password); 
                }
                $profil->save();
                // Alert::success('Sukses', 'Data Akun Diperbarui');
                return redirect()->route('home');
            }
        }else
        {
            $profil = User::find(Auth::user()->id);
            $profil->name = $request->name;
            $profil->email = $request->email;
            if(!empty($request->password ))
            {
                $profil->password = bcrypt($request->password); 
            }
            $profil->save();
            // Alert::success('Sukses', 'Data Akun Diperbarui');
            return redirect()->route('home');
        }
    }
}
