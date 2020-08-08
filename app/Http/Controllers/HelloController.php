<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function showHello($name) {
        return '<h1>Hello Controller: '.$name.' </h1>';
    }

    function resultProduct($product) {
        return '<h1>Show: '.$product.' </h1>';
    }
}
