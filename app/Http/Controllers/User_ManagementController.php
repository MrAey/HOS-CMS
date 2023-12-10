<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class User_ManagementController extends Controller
{

    //============= 1. Add New Users รับมาจากหน้า User Management =============//
    public function addUsers(Request $request)
    {

        // เช็ค password_confirmation ก่อนเลยจ้า ถ้าหลังจาก $request->validate() แล้วจะไม่ทำงาน
        if ($request->password !== $request->password_confirmation) {
            return back()->with('error', 'การยืนยันรหัสผ่านไม่ตรงกัน โปรดลองอีกครั้ง');
        }

        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'position' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:4|confirmed'
        ]);

        // check email ซ้ำ จ้าา
        $user = User::where('email', $request->email)->first();

        if ($user) {
            return back()->with('error', 'อีเมลนี้ได้ลงทะเบียนแล้ว โปรดลองใช้อีเมลอื่น');

        } else {
            $user = new User();
    
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->position = $request->position;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return back();
        }
    }


    //============= 2. Edit Users รับมาจากหน้า User Management =============//
    public function editUsers(Request $request, $id) {

        $request->validate([
            'editFirstname' => 'required|string',
            'editLastname' => 'required|string',
            'editPosition' => 'required|string'
        ]);

        $user = User::find($id);
        $user->firstname = $request->editFirstname;
        $user->lastname = $request->editLastname;
        $user->position = $request->editPosition;
        $user->save();

        return back();
        
    }

    

    //============= 3. Delete Users รับมาจากหน้า User Management =============//
    public function deleteUsers($id) {
        $user = User::find($id);

        // check ถ้าเป็น logged in account จะลบไม่ได้จ้า
        if ($user->id === Auth::user()->id) {
            return back()->with('error_delete', 'นี่คือบัญชีเข้าสู่ระบบของคุณ โปรดไปที่หน้าโปรไฟล์ของฉันเพื่อลบบัญชีของคุณ');

        } else {
            $user->delete();
            return back();
        }
    }

}