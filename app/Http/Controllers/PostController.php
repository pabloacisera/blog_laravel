<?php

namespace App\Http\Controllers;

class PostController {
    
    public function index()
    {
        $posts = [
            ["title"=>"primer post", "content"=>"Este es el contenido del primer post"],
            ["title"=>"segundo post", "content"=>"Este es el contenido del segundo post"],
            ["title"=>"tercer post", "content"=>"Este es el contenido del tercer post"],
        ];
       // Pasamos los posts a la vista 'blog.blade.php'
       return view('blog', ['posts' => $posts]);  
    }        
}