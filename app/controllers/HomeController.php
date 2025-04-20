<?php

class HomeController extends Database
{

    public function handle($params = [])
    {
        $banner = 'News Feed';

        $posts = $this->getAllPosts();

        require 'app/views/homepage.view.php';
    }
}