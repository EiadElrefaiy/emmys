<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function update(Request $request)
    {
        $userId = auth()->user()->id;
        $user = User::find($userId);


        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:255'],
        ], [
            'first_name.required' => 'يجب ادخال الاسم الاول.',
            'last_name.required' => 'يجب ادخال الاسم الثاني.',
            'email.required' => 'يجب ادخال البريد الالكتروني.',
            'email.email' => 'البريد الالكتروني غير صالح.',
            'email.unique' => 'البريد الالكتروني مستخدم بالفعل.',
            'phone.required' => 'يجب ادخال رقم الجوال.',
            'phone.unique' => 'رقم الجوال مستخدم بالفعل.',
            'address.required' => 'يجب ادخال العنوان.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ]);

        // Flash a success message to the session
        session()->flash('success', 'تم تحديث المعلومات بنجاح.');

        // Redirect back to the account info page
        return redirect()->back();
    }


    public function updatePassword(Request $request)
    {
        $user = auth()->user();

        $validator = Validator::make($request->all(), [
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['error' => 'خطأ في تأكيد كلمة السر'], 420);
        }

        // Check if the provided current password matches the user's current password
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return response()->json(['error' => 'خطأ في كلمة السر الحالية'], 422);
        }

        // Update the password
        $user->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        return response()->json(['message' => 'تم تحديث كلمة السر بنجاح']);
    }

}

