<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $slug;
    public $body;


    public function __construct($title, $excerpt, $date, $slug, $body)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->slug = $slug;
        $this->body = $body;

    }
    public static function all()
    {
        return cache()->rememberForever('posts.all',function(){
            return collect(File::files(resource_path("posts/")))->map(function ($file){
                $doc = YamlFrontMatter::parseFile($file);
                return new Post(
                    $doc->title,
                    $doc->excerpt,
                    $doc->date,
                    $doc->slug,
                    $doc->body()
                );
            })->sortByDesc('date');
        });
        
    
    }
    public static function find($slug)
    {
        if(! file_exists($path = resource_path("posts/{$slug}.html")))
        {
            throw new ModelNotFoundException();
        }
        return cache()->remember("posts.{$slug}",5, fn() =>file_get_contents($path));  
    }
}