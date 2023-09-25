<?php

class Conection {
    private $conect;
    public function __construct()
    {
        $pdo = "mysql:host=".host.";dbname=".db.";charset=".charset;

        try {
            $this->conect = new PDO($pdo, user, pass);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (\PDOException $e) {
           echo "Conection error ".$e->getMessage();
        }
    }

    public function conect() 
    {
        return $this->conect;
    }
}