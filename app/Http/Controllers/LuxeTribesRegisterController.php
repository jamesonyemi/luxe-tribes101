<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class LuxeTribesRegisterController extends Controller
{
    //
    public function createLuxeTribeMember(Request $request)
    {
        # code...


        $validated = $request->validate([

            'email' => 'required|unique:users|max:255| email:rfc,dns',
            'user_name' => 'alpha_num | required ',
            'password' => Password::min(6)->mixedCase(),

        ]);

        DB::table('users')->insertGetId([
            'full_name' => $request->full_name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_ARGON2I ),
        ]);

        return redirect()->route("user.create")->withSuccess('login successful');
    }
}