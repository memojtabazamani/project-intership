<?php


class database {
    public $this_connect = null;
    public function __construct()
    {
        try{
            $dbsn ="mysql:host=localhost;dbname=".Consts::DB_NAME;
            $dbuser=Consts::DB_USER;
            $dbpass=Consts::DB_PASS;
            $connect = new pdo($dbsn,$dbuser,$dbpass);
            $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // با این حل میشه...
            $connect->exec('SET NAMES utf8');

            $this->this_connect = $connect;
        }
        catch(PDOException $e){
            echo"Eror:  <br>" .$e->getMessage();
        }
    }
}
?>