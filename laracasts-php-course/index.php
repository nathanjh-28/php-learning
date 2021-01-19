<?php


// require 'core/bootstrap.php';
// require Router::load('routes.php')
//     ->direct(Request::uri());


class Post {
    public $title;

    public $published;
    public $author;

    public function __construct($title,$author,$published){
        $this->title = $title;
        $this->published= $published;
        $this->author= $author;

    }
}

$posts = [
    new Post('My First Post','AW',true),
    new Post('My Second Post','AF',true),
    new Post('My Third Post','A',true),
    new Post('My Fourth Post','ZW',false)
];



$unpublishedPosts = array_filter($posts, function ($post){
    return ! $post->published;

});
$publishedPosts = array_filter($posts, function ($post){
    return $post->published;

});

$m = array_map(function($post){
    $post->published = true;
    return $post;
}, $posts);


foreach($posts as $post){
    $post->published = true;
}

$authors = array_column($posts,'author','title');

var_dump($authors);