<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show(Request $request) {
        return $request->user();
    }

    public function update(Request $request) {
        $email = $request->user()->email;
        $user = User::where('email', $email)->first();
        $user->name = $request->name;
        $user->save();
        return response()->json($user);
    }
}
