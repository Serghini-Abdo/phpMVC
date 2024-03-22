<?php

namespace web\controllers\worldController;
include_once __DIR__ ."/../../metier/metierServices.php";
use metier\metierServices\Services;

class WorldController {
    public function index() {
        require_once __DIR__ ."/../views/mainView.php";
    }
    public function listerCountries() {
        $title="world";
        $titre="countries list";
        $world=new Services();
        $countries=$world->getAll();
        $africa=$world->getByContinent("africa");
        $asia=$world->getByContinent("asia");
        $europe=$world->getByContinent("europe");
        $north=$world->getByContinent("North America");
        $south=$world->getByContinent("South America");
        $oceania=$world->getByContinent("Oceania");
        require_once __DIR__ ."/../views/countriesView.php";
    }
    public function details($name) {
        $world=new Services();
        $country=$world->getAll($name);
        $country=$country[0];
        
        require_once __DIR__ ."/../views/countryDetailsView.php";
    }


    public function city() {
        header('Content-Type: text/plain');

        $currentTime = date('Y-m-d H:i:s');
return "hello";


    }

    public function updateFlag($name) {
        $world=new Services();

        $data=$_FILES["fileToUpload"]["tmp_name"];
        $world->postFlag($data,$name);

        echo "<script>window.location.href = '/phpMVC/details/$name';</script>";




    }

}





