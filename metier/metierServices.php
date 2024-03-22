<?php

namespace metier\metierServices;
include_once __DIR__."/../dao/daoServices.php";
use dao\daoServices\DaoServices;
use \stdClass;
use \DateTime;


class Services
{

    private static $col=array();

    public  function getAll($name=null) {
        $convert=new MetierTools();

        $serv=new DaoServices();
        $res=$serv->selectAll($name);
        foreach ($res as $row) {
            $row->flag = $convert->blobToImage($row->flag);
            
        }
        return $res;
    }
    public  function getByContinent($cont) {
        $convert=new MetierTools();

        $serv=new DaoServices();
        $res=$serv->selectByContinent($cont);
        foreach ($res as $row) {
            $row->flag = $convert->blobToImage($row->flag);
            
        }
        return $res;
    }


    public  function postFlag($data,$cr) {
        $convert=new MetierTools();
        $data=$convert->imageToBlob($data);
        $serv=new DaoServices();
        $serv->insertFlag($data,$cr);
        
    }
   

    


}

class UserServices
{


    public function userRegister($credt=array()) {
        $serv=new DaoServices();
        return $serv->registerUser($credt);
        
       }



       
    public function userUpdate($credt=array()) {

        $convert=new MetierTools();
        $serv=new DaoServices();
        $credt[3]= $convert->imageToBlob($credt[3]);
        return $serv->updateUser($credt);
        
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

            $convert=new MetierTools();
           $serv=new DaoServices();
           $res=$serv->selectUser();
           foreach ($res as $row) {
            $row->avatar=$convert->blobToImage($row->avatar);
            $row->birth=$convert->calculateAge($row->birth);
           }
           return $res;
       }

       
}


class MetierTools
{
    public function imageToBlob($data){
        //code
        // $fileTmpName = $_FILES["fileToUpload"]["tmp_name"];
        return file_get_contents($data);
    }
    public function blobToImage($data) {
        
        $image = base64_encode($data);
        return $image_src = 'data:image/jpeg;base64,' . $image;
}



public function calculateAge($birthdate) {
    // Create DateTime objects for birthdate and current date
    $birthdate = new DateTime($birthdate);
    $currentDate = new DateTime();
    
    // Calculate difference between birthdate and current date
    return  $currentDate->diff($birthdate)->y;
    
}
}










