<?php

require './app/functions.php';
require './app/config.php';
require './app/Database.php';
require './app/Router.php';

Router::get(parse_url($_SERVER['REQUEST_URI'])['path'], $_GET);