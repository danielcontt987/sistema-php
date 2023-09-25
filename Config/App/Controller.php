<?php

class Controller{

    protected $views, $model;

    public function __construct()
    {
        $this->loadModel();
        $this->views = new Views();
    }

    public function loadModel()
    {
        $model = get_class($this)."Model";
        $ruta = "Models/".$model.'.php';

        if (file_exists($ruta)) {
            require_once $ruta;
            $this->model = new $model();
        }
    }
}