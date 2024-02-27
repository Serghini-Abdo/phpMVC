<?php

namespace metier\metierServices;
include_once __DIR__."/../dao/daoServices.php";
use dao\daoServices\DaoServices;
use \stdClass;


class Services
{

    private static $col=array();

    public static function findAll($table) {
        $serv=new DaoServices();
        self::$col=$serv->getAll($table);
        return self::$col;
    }


}

class UserServices
{


    public function userRegister($credt=array()) {
        $serv=new DaoServices();
        $resp=$serv->registerUser($credt);
        $msg = new stdClass();
        
    
       
            $msg->resp =true;
            $msg->txt = $resp['txt'];
            return $msg;
       }

    public function userLogIn($email,$pwd) {
        //code
        $serv=new DaoServices();
        return $serv->logInUser($email,$pwd);
    }
    
}



// $test=new UserServices();
// $Q[1]=$test->userRegister(["saad","msiasd","saad@mail","045654","abcd"]);
// $Q[2]=$test->userLogIn("saad@mail","abcd");
// $Q[3]=$test->userLogIn("saad@mail","abcd1234");
// $Q[4]=$test->userLogIn("saadmail","abcd");
// for ($i=1; $i <= 4; $i++) {
//     var_dump($Q[$i]);
//     echo"-----------------\n";
//     # code...
// }

// $request = $_SERVER['REQUEST_URI'];



// $test=new Services();
// print_r( $test->findAll("country"));
// //print_r( $test->findAll("city"));





