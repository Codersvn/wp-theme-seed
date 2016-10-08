<?php

use App\Models\Post;

require_once __DIR__ . '/bootstrap/app.php';

if (!is_admin()) {
    $posts = Post::with('thumbnail')->get();
    foreach ($posts as $post) {
        var_dump($post->getThePostThumbnail('full'));
    }

}
