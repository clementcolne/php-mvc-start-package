<?php

class Manager {

    private $db;

    /**
     * Manager constructor
     *
     * The goal of this class is to make a connection to the database or any
     * global component
     */
    public function __construct() {
        $this->db = $this->dbConnect();
    }

    /**
     * Return the connection to the database
     *
     * @return PDO database connection
     */
    protected function dbConnect() {
        $servername = "mysql:host=localhost;port=8889;dbname=dbname;charset=utf8;";
        $username = "root";
        $password = "root";
        $db = new PDO($servername, $username, $password);
        return $db;
    }

}
