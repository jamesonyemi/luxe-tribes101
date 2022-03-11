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
            'name' => $request->email,
            'email' => $request->email,
            'password' => $request->password,
        ]);

       return DB::table('users')->get();
    }
}
