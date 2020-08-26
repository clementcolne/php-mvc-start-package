<?php

class Manager {

    public $db;

    /**
     * Manager constructor
     */
    public function __construct() {
        $this->db = $this->dbConnect();
    }

    /**
     * Return the connexion to the database
     * @return PDO database connexion
     */
    protected function dbConnect() {
        $servername = "mysql:host=localhost;port=8889;dbname=facturator;charset=utf8;";
        $username = "root";
        $password = "root";
        /*$servername = "mysql:host=agencefodvforeac.mysql.db;dbname=agencefodvforeac;charset=utf8;";
        $username = "agencefodvforeac";
        $password = "Motdepasse1";*/
        $db = new PDO($servername, $username, $password);
        return $db;
    }

    public function getDb() {
        return $this->db;
    }

}
