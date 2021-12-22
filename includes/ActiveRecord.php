<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 12/20/2021
 * Time: 8:26 PM
 */


class ActiveRecord {
    protected $table_name = "";
    protected $db_connect = "";
    public function __construct()
    {
        $db = new database();
        $this->db_connect = $db->this_connect;
    }


    /**
     * @return bool|PDOStatement
     * use for fetch all rows !
     */
    public function FindAll($areFetch = false) {
        $stmt = $this->db_connect->query("SELECT * FROM ". $this->table_name);
        if($areFetch) {
            return $stmt->fetchAll();
        } else {
            return $stmt;
        }
    }


}