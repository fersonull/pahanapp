<?php

class HomeController
{
    public function handle($params = [])
    {
        $banner = 'News Feed';

        require 'app/views/homepage.view.php';
    }
}