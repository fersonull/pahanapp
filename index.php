<?php

require './app/functions.php';
require './app/Database.php';
require './app/Router.php';

$config = require './app/config.php';

Router::get(parse_url($_SERVER['REQUEST_URI'])['path'], $_GET);