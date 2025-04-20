<?php

class PostController extends Database
{
    public function handle($params = [])
    {
        $banner = 'My Posts';

        $post = $this->getPost($params['id']);

        require 'app/views/posts.view.php';
    }
}