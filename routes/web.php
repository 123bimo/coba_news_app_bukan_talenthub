<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Breaking News']);
});

Route::get('/olahraga', function () {
    return view('olahraga', ['title' => 'Berita Olahraga', 'nama' => 'Klasemen Piala AFF U-19', 'nama2' => 'Final Proliga 2024']);
    // return view('olahraga', ['title' => 'Berita Olahraga', 'posts' => [
    //     [
    //         'title' => 'Klasemen Piala AFF U-19',
    //         'author' => 'Bintang Bima',
    //         'body' => ''
    //     ],
    //     [
    //         'title' => 'Klasemen Piala AFF U-19',
    //         'author' => 'Bintang Bima',
    //         'body' => 'Final Proliga 2024'
    //     ]
    // ]]);
});

Route::get('/ekonomi', function () {
    return view('ekonomi', ['title' => 'Berita Ekonomi','nama' => 'Wakil Menteri Keuangan Il-Thomas Djiwandono' ]);
});

Route::get('/teknologi', function () {
    return view('teknologi', ['title' => 'Berita Teknologi','nama' => 'Microsoft Down Secara Global' ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Hubungi Kami : ']);
});
