<?php
include "MyPDO.php";

class UserService
{
    private $db;

    public function __construct()
    {
        $this->db = new MyPDO();
    }
    public function test(){
        $this->db->query('insert into User (Username,Password) VALUES ("pouet","pouet")');
    }
}