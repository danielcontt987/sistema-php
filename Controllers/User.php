<?php

class User extends Controller {
    public function index()
    {
        print_r($this->model->getUser());
    }
}