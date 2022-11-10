<?php 

namespace App\Models; 

class Post
{
    private static $blog_posts =[
        [
            "title" => "venom",
            "slug" => "judul-post-pertama",
            "body" => "A failed reporter is bonded to an alien entity, one of many symbiotes who have invaded Earth. But the being takes a liking to Earth and decides to protect it."
        ],
        [
            "title" => "The Banshees of Inisherin",
            "slug" => "judul-post-kedua",
            "body" => "Two lifelong friends find themselves at an impasse when one abruptly ends their relationship, with alarming consequences for both of them."
        ]
    ];

    public static function all()
    {
        return collect( self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post =$p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
