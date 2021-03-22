<?php

    class Database
    {
        private $db;

        public function __construct()
        {
            $this->db = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
        }

        //for one record only
        public function fetchSingle($sql, $bindData = null)
        {
            $sth = $this->db->prepare($sql);
            $sth->execute($bindData);
            return $sth->fetch();
        }

        //for multiple records
        public function fetchAllAssoc($sql, $bindData=null)
        {
            $sth = $this->db->prepare($sql);
            $sth->execute($bindData);
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }

        //executes a statement only. Doesn't return something
        public function onlyExecute($sql, $bindData=null)
        {
            $sth = $this->db->prepare($sql);
            $sth->execute($bindData);
        }
    }

?>