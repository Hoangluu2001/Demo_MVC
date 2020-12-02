<?php


namespace App\model;


class DPconnection
{
    protected $dsn;
    protected $username;
    protected $password;

    public  function __construct(){
        $this->dsn = 'mysql:host=localhost;dbname=vethietke';
        $this->username ='root';
        $this->password ='123456@Abc';
}
    public function connect(){
        try{
            return new \PDO($this->dsn,$this->username,$this->password);
        }catch (\PDOException $e){
            echo $e->getMessage();
            exit();
        }
}
}