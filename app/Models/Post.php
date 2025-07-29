<?php 

namespace  App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all () {
        return [
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
    }
    public static function find ($slug) {
        // return  Arr::first(static::all(), function ($post) use ($slug) { 
        //     return $post['slug'] == $slug;
        // });
        
        return  Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}
