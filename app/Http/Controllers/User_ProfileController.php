<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class User_ProfileController extends Controller
{

    //============= 1. update my_profile หน้า user_profile =============//
    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'editFirstname' => 'required|string',
            'editLastname' => 'required|string',
            'editPosition' => 'required|string',
            'editEmail' => 'required|email'
        ]);

        $user = User::where('email', $request->editEmail)->first();
        
        if ($user) {
            return back()->with('error', 'อีเมลนี้ได้ลงทะเบียนแล้ว โปรดลองใช้อีเมลอื่น');

        } else {

            $user = User::find($id);
            $user->firstname = $request->input('editFirstname');
            $user->lastname = $request->input('editLastname');
            $user->position = $request->input('editPosition');
            $user->email = $request->input('editEmail');
            $user->save();

            return back();
        }
    }


    //============= 2. update password หน้า user_profile =============//
    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|confirmed|min:4'
        ]);
    
        $user = User::find($id);
            
        if (!Hash::check($request->currentPassword, $user->password)) {
            return back()->withErrors(['currentPassword' => 'รหัสผ่านปัจจุบันไม่ถูกต้อง โปรดลองอีกครั้ง']);
        }
    
        $user->password = Hash::make($request->newPassword);
        $user->save();
    
        return redirect()->route('user_profile')->with('success', 'อัปเดตรหัสผ่านเรียบร้อยแล้ว');
    }



    //============= 3. delete account หน้า user_profile =============//
    public function deleteAccount(Request $request, $id)
    {
        $request->validate([
            'deletePassword' => 'required|min:4'
        ]);

        $user = User::find($id);
    
        if (!Hash::check($request->deletePassword, $user->password)) {
            return redirect()->route('user_profile')->with('passwordIncorrect', 'รหัสผ่านไม่ถูกต้อง โปรดลองอีกครั้ง');
        }

        $user->delete();
        Auth::logout();

        return redirect()->route('login')->with('accountDeleted', 'บัญชีของคุณถูกลบเรียบร้อยแล้ว');;
    }


}
