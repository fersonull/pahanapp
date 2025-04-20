<?php

require './app/functions.php';
require './app/config.php';
require './app/Database.php';
require './app/Router.php';

$config = require './app/config.php';

$db = new Database($config['Database'], $config['Creds']['username'], $config['Creds']['password']);

$db->getAllPosts();

Router::get(parse_url($_SERVER['REQUEST_URI'])['path'], $_GET);