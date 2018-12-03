<?php
  class DB{
    private $host = "localhost";
    private $dbname = "chatbot";
    private $dbuser = "root";
    private $dbpass = "";
    private $conn;

    public function __construct(){
      if (!isset($this->conn)) {
        try {
          $pdo = new PDO("mysql:host=".$this->host.";"."dbname=".$this->dbname, $this->dbuser, $this->dbpass);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $pdo->exec("SET CHARACTER SET utf8");
          $this->conn = $pdo;
        } catch (PDOException $e) {
          die("<h3>Database Connection Failed </h3>".$e->getMessage());
        }

      }
    }

    public function simplequery($q, $data = array()){
      $stmt = $this->conn->prepare($q);
      $stmt->execute($data);
      return $stmt;
    }

    public function simplequerywithoutcondition($q){
      $stmt = $this->conn->prepare($q);
      $stmt->execute();
      return $stmt;
    }
  }
?>
