<?php

class PostController
{
    public function handle($params = [])
    {
        $banner = 'My Posts';
        require 'app/views/posts.view.php';
    }
}