<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\CharacterResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Character;

class UserController extends Controller
{
    // あとはレスポンスの項目のみ
    public function show(Request $request)
    {
        return new UserResource($request->user());
    }

    public function update(UserUpdateRequest $request)
    {
        $user = User::where('email', $request->user()->email)->first();
        $user->name = $request->name;
        $user->save();
        return new UserResource($user);
    }

    public function list(Request $request)
    {
        $user_id = $request->user()->id;
        $characters = Character::where('user_id', $user_id)->get();
        return $characters;
    }
    
}
