<?php


class Database{

    private $dsn;
    private $userName;
    private $password;


    function __construct($dbName, $userName, $password){

        $this->dsn = 'mysql:dbname=' . $dbName . ';' . 'host=localhost';
        $this->userName = $userName;
        $this->password = $password;
        
    }


    public function connect(){
          
        return new PDO($this->dsn, $this->userName , $this->password );

    }

}



$dbObj = new Database('blockchain', 'root' , '' );





try{

     $db = $dbObj->connect();


  } catch(PDOException $e){

    echo $db->errorInfo();


} 