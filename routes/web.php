<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'SantStyle',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet iure alias laborum
            sint, necessitatibus
            asperiores eligendi, hic totam sapiente voluptate assumenda. Odit deleniti voluptatem excepturi assumenda
            repellat quae dolor recusandae.'
        ],
        [
            'id'=> 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2 ',
            'author' => 'SantStyle',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse perspiciatis est
            voluptatibus suscipit, nisi expedita assumenda corrupti quaerat asperiores, tenetur, rem qui. Reprehenderit
            eligendi, voluptatum culpa eius quibusdam corrupti. Impedit!'
        ],
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('posts/{slug}', function($slug) {
        $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'SantStyle',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet iure alias laborum
            sint, necessitatibus
            asperiores eligendi, hic totam sapiente voluptate assumenda. Odit deleniti voluptatem excepturi assumenda
            repellat quae dolor recusandae.'
        ],
        [
            'id'=> 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2 ',
            'author' => 'SantStyle',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse perspiciatis est
            voluptatibus suscipit, nisi expedita assumenda corrupti quaerat asperiores, tenetur, rem qui. Reprehenderit
            eligendi, voluptatum culpa eius quibusdam corrupti. Impedit!'
        ],
    ];
        $post = Arr::first($posts, function ($post) use ($slug) { 
            return $post['slug'] == $slug;
        });

        if (!$post) abort(404);

        return view('post', ['title'=> 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title'=> 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
