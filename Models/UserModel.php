<?php

class UserModel extends Query{
   public function __construct()
   {
      parent::__construct();
   }

   public function getUser(string $user, string $psw)
   {
      $sql = "SELECT * FROM users WHERE user = '$user' AND password = '$psw'";
      $data = $this->select($sql);
      return $data;
   }
}