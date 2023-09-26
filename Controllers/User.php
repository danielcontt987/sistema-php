<?php

class User extends Controller {
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    
    public function index()
    {
        $this->views->getView($this, "index");
    }

    public function validate()
    {
        if (empty($_POST['user']) || empty($_POST['psw'])) {
            $msg = "The fields are required";
        } else {
            $user = $_POST['user'];
            $psw = $_POST['psw'];
            $data = $this->model->getUser($user, $psw);

            if ($data) {
                $_SESSION['id'] = $data['id'];
                $_SESSION['user'] = $data['user'];
                $_SESSION['name'] = $data['name'];
                $msg = "ok";
            } else {
                $msg = "Username or password is invalid.";
            }
        }
        
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}