<?php

class UserModel extends Query{
   public function __construct()
   {
      parent::__construct();
   }

   public function getUser()
   {
      $sql = "SELECT * FROM users";
      $data = $this->select($sql);
      return $data;
   }
}