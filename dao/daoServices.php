<?php


namespace dao\daoServices;

use \PDO;

class DaoServices {
    private $con;

    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=world","root","") or die("echec de connexion avec DB");
    }
    public function getAll($tab) {
        $sql = "select * from $tab limit 5 ";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }
    public function getCitysOf($cntr) {
        $sql = "select * from city where countryCode=? limit 5";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$cntr]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function registerUser($credt) {
        $sql = "insert into users (fname,lname,email,phone,pwd) values (?,?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $credt[4] = password_hash($credt[4], PASSWORD_DEFAULT);
        $stmt->execute([$credt[0],$credt[1],$credt[2],$credt[3],$credt[4]]);
        echo "user registered";
    }
    public function checkUserEmail($email) {
        $sql = "select count(*)as nb from users where email=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$email]);
        $res=$stmt->fetch(PDO::FETCH_OBJ);
        if ($res->nb == 0) {
            echo "proceed";
        }
        else {
            echo "declined";
        }

    }
    public function logInUser($email,$pwd) {
        $sql = "select * from users where email=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$email]);
        $res= $stmt->fetch(PDO::FETCH_OBJ);
        if (password_verify($pwd, $res->pwd)) {
            // Password is correct
            // Proceed with user authentication
            echo "Login successful";
        } else {
            // Invalid password
            echo "Invalid password";
        }

    }
}

// $dao=new DaoServices();
// $dao->checkUserEmail("newemail");
// $dao->logInUser("email","pwd1");
// $dao->registerUser($arrayName = array("abdo","serghini","email","phone","pwd"));
// var_dump($dao->getAll("city"));
// var_dump($dao->getAll("country"));
// var_dump($dao->getCitysOf("afg"));
// var_dump($dao->getCitysOf("are"));





