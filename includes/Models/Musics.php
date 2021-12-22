<?php

require_once (ROOT_SITE . "/includes/ActiveRecord.php");
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 12/20/2021
 * Time: 8:33 PM
 */


class Musics extends ActiveRecord {
    protected $table_name = "tbl_musics";

    private $fields_form = array("musics_id","musics_title", "musics_genre", "musics_address", "musics_image", "musics_signer");

    public function load($requests) {
        foreach ($this->fields_form as $key) {
            if(array_key_exists($key,$requests)) {
                $this->fields_form[$key] = $requests[$key];
            }

        }
    }

    public function insertToDB() {

        $stmt = $this->db_connect->prepare("INSERT INTO $this->table_name
(musics_title,
musics_genre,
musics_address,
musics_image,
musics_signer) VALUES (:musics_title,:musics_genre,:musics_address,:musics_image,:musics_signer)");
        $stmt->bindparam(':musics_title', $this->fields_form['musics_title']);
        $stmt->bindparam(':musics_genre', $this->fields_form['musics_genre']);
        $stmt->bindparam(':musics_address', $this->fields_form['musics_address']);
        $stmt->bindparam(':musics_image', $this->fields_form['musics_image']);
        $stmt->bindparam(':musics_signer', $this->fields_form['musics_signer']);
        return $stmt->execute();
    }

    public function deleteFromDb() {
        $stmt = $this->db_connect->prepare("DELETE FROM $this->table_name WHERE musics_id = :musics_id LIMIT 1");
        $stmt->bindparam(':musics_id', $this->fields_form['musics_id']);
        return $stmt->execute();
    }
}