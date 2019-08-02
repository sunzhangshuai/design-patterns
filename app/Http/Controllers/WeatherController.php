<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zhangshuai\Weather\Weather;

class WeatherController extends Controller
{
    public function show(Request $request, Weather $weather, $city)
    {
        return $weather->getWeather($city);
    }
}
