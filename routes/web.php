<?php

use App\Models\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

function genId() {
    $n = 10;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}


Route::get('/', function () {
    return view('home');
});

Route::get('/{id}', function($id) {
    $url = URL::whereUid($id)->first();

    if (!$url) {
        return view('home');
    }

    return redirect($url->url);
});

Route::post('/shorten', function(Request $request) {
    $url = $request->input('url');

    $id = genId();

    URL::create(['uid'=>$id,'url'=>$url]);

    return view('yourShortenedUrl', ['id'=>$id]);
});
