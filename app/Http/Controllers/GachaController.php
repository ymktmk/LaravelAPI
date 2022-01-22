<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GachaController extends Controller
{
    public function draw() {
        $res = file_get_contents('http://weather.livedoor.com/forecast/webservice/json/v1?city=130010');
        $weather = json_decode($res, true);
        var_dump($weather);
        return $weather;
    }
}
