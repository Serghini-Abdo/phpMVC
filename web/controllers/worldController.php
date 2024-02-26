<?php

namespace web\controllers\worldController;
include_once __DIR__ ."/../../metier/metierServices.php";
use metier\metierServices\Services;

class WorldController {
    public function index() {
        $title="world";
        $titre="countries list";
        $test=new Services();
        $list=$test->findAll("country");
        require_once __DIR__ ."/../views/countrysView.php";
    }
    public function contact() {
        $mail="smt@gmail.com";
        require_once __DIR__ ."/../views/citysOfView.php";

    }
}




