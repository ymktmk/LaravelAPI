<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GachaController extends Controller
{
    public function draw(Request $request) {
        $number = mt_rand(1, 151);
        $url = "https://pokeapi.co/api/v2/pokemon/".$number;
        $json = file_get_contents($url);
        $res = json_decode($json);
        // charactersテーブルに保存
        $character =  $request->user()->characters()->create([
            'name' => $res->{"name"}
        ]);
        return $character;
    }
}
