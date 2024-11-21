<?php

require 'vendor/autoload.php';

class Database {
    private $client;
    private $db;

    public function __construct() {
        $this->client = new MongoDB\Client("mongodb+srv://<root>:<12559099>@<cadastro-estudantes>.mongodb.net");
        $this->db = $this->client->selectDatabase('mongodb');
    }
    public function getCollection($collectionName) {
        return $this->db->$collectionName;
    }
}