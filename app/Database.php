<?php

class Database
{
    protected $conn;

    public function __construct()
    {
        $config = require 'app/config.php';

        $dsn = 'mysql:' . http_build_query($config['Database'], '', ';');

        // print_r($dsn);
        $this->conn = new PDO($dsn, $config['Creds']['username'], $config['Creds']['password'], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);

        return $stmt->fetchAll();
    }

    public function getAllPosts()
    {
        $query = $this->query("SELECT * FROM posts");
        return $query;
    }

    public function getPost($param)
    {
        $query = $this->query("SELECT * FROM posts WHERE post_id = ?", [$param]);
        return $query;
    }
}