<?php

Class connString{
    private $server = "mysql:unix_socket=/cloudsql/pwa-app-project-386102:asia-east1:pwa-app-project;port=3306;dbname=db_students";
    private $username = "root";
    private $password = "";
    private $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $conn;
    public function open(){
        try{
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->option);
            return $this->conn;
        }
        catch(PDOException $e){
            echo "No connection received: " . $e->getMessage(); 
        }
        echo "Connected!";
    }
    public function close(){
        $this->conn = null;
    }
}

?>