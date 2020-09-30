<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/26/2020
 * Time: 1:26 AM
 */
require_once "configs/Database.php";
class Model
{
    public $connection;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

    public function getConnection(){
        $connection = new PDO(Database::DB_DSN, Database::DB_USERNAME, Database::DB_PASSWORD);
        return $connection;
    }
}