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

    function show() {
        return view('create.product')
        ->with('name', 'Washira')
        ->with('title', 'Laravel Basic Project');
    }

    function edit() {
        return view('edit')
        ->with('name', 'us_pou')
        ->with('title', 'Edit Page');
    }
}
