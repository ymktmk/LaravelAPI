<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // user情報を返す
    public function show(Request $request) {
        return $request->user();
    }

    // user更新
    public function update(Request $request, User $user) {

        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8',
        // ]);

        $user->fill($request->all());
        $user->save();

        return $user;
    }

}
