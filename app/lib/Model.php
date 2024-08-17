<?php
class Model {
    protected $db;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

        if ($this->db->connect_error) {
            die('Conexión fallida: ' . $this->db->connect_error);
        }
    }
}