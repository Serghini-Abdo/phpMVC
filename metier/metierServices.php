<?php

namespace metier\metierServices;
include_once __DIR__."/../dao/daoServices.php";
use dao\daoServices\DaoServices;


class Services
{

    private static $col=array();

    public static function findAll($table) {
        $serv=new DaoServices();
        self::$col=$serv->getAll($table);
        return self::$col;
    }


}
$request = $_SERVER['REQUEST_URI'];



// $test=new Services();
// print_r( $test->findAll("country"));
// //print_r( $test->findAll("city"));





