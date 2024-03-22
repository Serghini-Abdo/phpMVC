<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" id="index" data-bs-theme='light'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORLD</title>
    <link rel="icon" type="image/png"
  href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqUk4i5v-6rNv4r8hlyEg2h9nOguZTuWSXCNZrYj3R5NAKbQ_wm88j_vle2A&s">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    <?php include_once __DIR__."/web/ressources/css/main.css" ?>
</style>


    <script src="https://kit.fontawesome.com/740d24ac4b.js" crossorigin="anonymous"></script>
</head>
<body >




<?php

include_once __DIR__."/web/controllers/worldController.php";
include_once __DIR__."/web/controllers/userController.php";
use web\controllers\worldController\WorldController;
use web\controllers\userController\UserController;



$url=null;
$wrld=new WorldController();
$user=new UserController();
if (isset($_GET['url'])) {
    # code...
    $url= explode("/",$_GET['url']);

    switch ($url) {
    
        case empty($url[0]):
     
        $wrld->index();
        break;
    
        case !empty($url[0])&&empty($url[1]):
          if ($url[0]=="countries") {

            $wrld->listerCountries();

          }elseif($url[0]== "dashboard") {
          
            $user->dashboard();
          
          
          }elseif($url[0]== "citys") {
          
            require_once __DIR__."/web/views/citysOfView.php";
          
          }elseif($url[0]== "city") {
          
            $wrld->city();
          
          }

          break;
    
        case !empty($url[0])&&!empty($url[1])&&empty($url[2]):
         
        if ($url[0]== "form") {

          if ($url[1]== "logIn") {
            
            $user->logIn() ;

          }elseif ($url[1]== "signUp") {

            $user->signUp() ;

          }elseif ($url[1]== "logOut") {

            $user->logOut() ;
          }

        }elseif ($url[0]== "profile") {
          
            $user->profile($url[1]) ;
        
        }elseif ($url[0]== "updateP") {
          
          $user->updateProfile($url[1]) ;
      
        }elseif ($url[0]== "details") {
          
            $wrld->details($url[1]);
          
        
        }elseif ($url[0]== "updateF") {
          
            $wrld->updateFlag($url[1]);
          
        }

        break;
        
        
     default:
    require_once __DIR__ .'/web/views/404.php';

}
}

?>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
<?php include_once __DIR__."/web/ressources/js/main.js" ?>
</script>

</body>
</html>


