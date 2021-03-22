<?php

class UserModel
{
    public $id;
    public $name;

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getFirstname()
    {
        $result = $this->db->fetchSingle("SELECT Firstname FROM user WHERE ID=$this->id;");
        return $result['Firstname'];
    }

    public function getAllData()
    {
        $result = $this->db->fetchAllAssoc("SELECT * FROM user WHERE ID=$this->id");
        return $result;
    }
}

?>