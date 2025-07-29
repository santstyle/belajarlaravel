<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
    return view('home', ['title' => 'Home']);
});
Route::get('/posts', function () {
    $posts = [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'SantStyle',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet iure alias laborum
            sint, necessitatibus
            asperiores eligendi, hic totam sapiente voluptate assumenda. Odit deleniti voluptatem excepturi assumenda
            repellat quae dolor recusandae.'
        ],
        [
            'title' => 'Judul Artikel 2 ',
            'author' => 'SantStyle',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse perspiciatis est
            voluptatibus suscipit, nisi expedita assumenda corrupti quaerat asperiores, tenetur, rem qui. Reprehenderit
            eligendi, voluptatum culpa eius quibusdam corrupti. Impedit!'
        ],
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});
Route::get('/about', function () {
    return view('about', ['title'=> 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
=======
    return view('welcome');
>>>>>>> 9271f4d125130300938e5d5ef50799400c9b47a3
});
