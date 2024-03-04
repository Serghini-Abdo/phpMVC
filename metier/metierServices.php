<?php

namespace metier\metierServices;
include_once __DIR__."/../dao/daoServices.php";
use dao\daoServices\DaoServices;
use \stdClass;


class Services
{

    private static $col=array();

    public  function getAll($name=null) {
        $serv=new DaoServices();
        self::$col=$serv->selectAll($name);
        return self::$col;
    }
    public  function getByContinent($cont) {
        $serv=new DaoServices();
        self::$col=$serv->selectByContinent($cont);
        return self::$col;
    }
   

    


}

class UserServices
{


    public function userRegister($credt=array()) {
        $serv=new DaoServices();
        return $serv->registerUser($credt);
        
       }

       
       public function userLogIn($email,$pwd) {
           
           $serv=new DaoServices();
           return $serv->logInUser($email,$pwd);
       }


       public function getUserInfo($email) {
           $convert=new MetierTools();
           $serv=new DaoServices();
           $res= $serv->selectUser($email);
           $res->avatar=$convert->blobToImage($res->avatar);
           return $res;
       }
       public function getUsers() {
           
           $serv=new DaoServices();
           return $serv->selectUser();
       }

       
}


class MetierTools
{
    public function imageToBlob($data){
        //code
        //$imageData = file_get_contents($fileTmpName);
    }
    public function blobToImage($data) {
        
        $image = base64_encode($data);
        return $image_src = 'data:image/jpeg;base64,' . $image;
}
}










