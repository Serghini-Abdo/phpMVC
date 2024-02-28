<?php


namespace dao\daoServices;

use \PDO;
use \stdClass;

class DaoServices {
    private $con;

    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=world","root","") or die("echec de connexion avec DB");
    }
    public function selectAll($tab) {
        $sql = "select Name,Continent,Region,HeadOfState,Capital,flag from $tab ";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $res=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($res as $row) {
            $row->Capital = $this->selectCapital($row->Capital);
        }
        return $res;

    }
    public function selectCapital($cap) {
        $sql = "select Name from city where ID=? ";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$cap]);
        $res=$stmt->fetch(PDO::FETCH_OBJ);
        return $res->Name;

    }
    public function selectByContinent($tab,$cont) {
        $sql = "select Name,Continent,Region,HeadOfState,Capital,flag from $tab where continent=? ";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$cont]);
        $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $res["capital"] = $this->selectCapital($res["capital"]);
        return $res;

    }
    public function selectByRegion($tab, $reg) {
        $sql = "select Name,Continent,Region,HeadOfState,Capital,flag from $tab where region=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$reg]);
        
        $res=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($res as $row) {
            $row->Capital = $this->selectCapital($row->Capital);
        }
        return $res;

    }
    public function selectCitysOf($cntr) {
        $sql = "select * from city where countryCode=? limit 5";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$cntr]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function registerUser($credt) {
        try {
            $sql = "insert into users (fname,lname,email,phone,pwd) values (?,?,?,?,?)";
            $stmt = $this->con->prepare($sql);
            $credt[4] = password_hash($credt[4], PASSWORD_DEFAULT);
            $msg=new stdClass() ;
            $chk=$this->checkUserEmail($credt[2]);
            if ($chk) {
                $stmt->execute([$credt[0],$credt[1],$credt[2],$credt[3],$credt[4]]);
                return $msg=["res"=>true,"txt"=>"user registered successfully"];
            }
            else {
                return $msg=["res"=>true,"txt"=>"email already registered"];
            }
        } catch (\Throwable $th) {
            //throw $th;
            return $msg=["res"=>false,"txt"=>"unexcpected"];
        }
      
    }
    public function checkUserEmail($email) {
        $sql = "select count(*)as nb from users where email=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$email]);
        $res=$stmt->fetch(PDO::FETCH_OBJ);
        return $res->nb == 0 ? true : false;

    }
    public function checkUserRole($id) {
        $sql = "select role  from users where id=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$id]);
        $res=$stmt->fetch(PDO::FETCH_OBJ);
        return $res->role == "admin" ? true : false;

    }
    public function logInUser($email,$pwd) {
        $sql = "select * from users where email=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$email]);
        $res= $stmt->fetch(PDO::FETCH_OBJ);
        $msg=new stdClass();
        if (!empty($res)) {
            if (password_verify($pwd, $res->pwd)) {
                // Password is correct
                // Proceed with user authentication
                return $msg=["res"=>true,"txt"=>""];
            } else {
                // Invalid password
                return $msg=["res"=>false,"txt"=>"Invalid password"];
            }
        }else {
            return $msg=["res"=>false,"txt"=>"user with email not regisetred"];
        }

    }
    
}

// $dao=new DaoServices();
// // $res=$dao->selectAll("country");
// $res=$dao->selectCapital('2486');
// // echo $res->Name;

// var_dump($res);
// $dao->checkUserEmail("newemail");
// $dao->logInUser("email","pwd");
// $dao->registerUser($arrayName = array("abdo","serghini","email","phone","pwd"));






