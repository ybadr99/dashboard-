<?php

class DB{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $dbname = "test";

    public function connect()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        $pdo = new PDO($dsn, $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;
        
    } 
    

}



?>