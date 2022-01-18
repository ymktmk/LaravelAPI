<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function create(Request $request) {
        // リクエストBody取得
        $body = json_decode($request->getContent(), true);
        $name = $body['name'];

        return response()->json([
            "name" => $name
        ]);
    }

    public function show() {

    }

    public function update() {

    }

}
