<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" id="index" data-bs-theme='light'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="./web/ressources/icon.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<!---------------------------------toggleModeCSS------------------------------------------->
<style>
    .toggle-switch {
        margin-left: 5px;
  position: relative;
  width: 80px;
  height: 35px;
  --light: #d8dbe0;
  --dark: #28292c;
  --link: rgb(27, 129, 112);
  --link-hover: rgb(24, 94, 82);
}

.switch-label {
  position: absolute;
  width: 100%;
  height: 35px;
  background-color: var(--dark);
  border-radius: 25px;
  cursor: pointer;
  border: 3px solid var(--dark);
}

.checkbox {
  position: absolute;
  display: none;
}

.slider {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 25px;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.checkbox:checked ~ .slider {
  background-color: var(--light);
}

.slider::before {
  content: "";
  position: absolute;
  top: 5px;
  left: 5px;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  -webkit-box-shadow: inset 12px -4px 0px 0px var(--light);
  box-shadow: inset 12px -4px 0px 0px var(--light);
  background-color: var(--dark);
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.checkbox:checked ~ .slider::before {
  -webkit-transform: translateX(40px);
  -ms-transform: translateX(40px);
  transform: translateX(40px);
  background-color: var(--dark);
  -webkit-box-shadow: none;
  box-shadow: none;
}

</style>

    <script src="https://kit.fontawesome.com/740d24ac4b.js" crossorigin="anonymous"></script>
</head>
<body >
<!----------------------------------------NAVBAR---------------------------------------------->
<?php include_once __DIR__."/web/views/navBar.php" ?>

<!----------------------------------------SIDE-------------------------------------------->


<?php

include_once __DIR__."/web/controllers/worldController.php";
include_once __DIR__."/web/controllers/userController.php";
use web\controllers\worldController\WorldController;
use web\controllers\userController\UserController;









$url=null;
$ctrl=null;
if (isset($_GET['url'])) {
    # code...
    $url= explode("/",$_GET['url']);

    switch ($url) {
    
        case empty($url[0]):
        $ctrl=new WorldController();
        $ctrl->index();
        break;
    
        case !empty($url[0])&&empty($url[1]):
          if ($url[0]=="countries") {
            $ctrl=new WorldController();
            $ctrl->listerCountries();
          }

          break;
    
        case !empty($url[0])&&!empty($url[1])&&empty($url[2]):
          $ctrl=new UserController();
        if ($url[0]== "form") {
          if ($url[1]== "logIn") {
            
            $ctrl->logIn() ;

          }elseif ($url[1]== "signUp") {
            $ctrl->signUp() ;

          }elseif ($url[1]== "logOut") {
            $ctrl->logOut() ;
          }

        }elseif ($url[0]== "details") {
          
            $ctrl=new WorldController();
            $ctrl->details($url[1]);
          
        }

        break;
        
    // case '':
    //     # code...
    //     echo "hello";
    //     break;
    // case 'home':
    //     if (empty($url[1])) {
    //         $test=new WorldController();
    //         $test->index();
    //         break;
    //     }elseif (!empty($url[1])) {
    //         # code...
    //     }
    // case 'contact':
    //     $test=new WorldController();
    //     $test->contact();
    //     break;
    
     default:
    http_response_code(404);
    require_once __DIR__ .'/web/views/404.php';

}
}

?>
<!----------------------------------------FOOTER---------------------------------------------->
<div class="container">
<?php include_once __DIR__."/web/views/footer.php" ?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<script>
  function toggleMode() {
    
    const html = document.querySelector("html");
    let mode = document.getElementById("flexSwitchCkeckCheked").checked;
    
    if (mode) {
      html.setAttribute("data-bs-theme", "dark");
      sessionStorage.setItem("theme", "dark"); // Store theme preference in session storage

    }else{
    html.setAttribute("data-bs-theme", "light");
    sessionStorage.setItem("theme", "light"); // Store theme preference in session storage

    }
   
  }
  // Check session storage for theme preference when the page loads
window.addEventListener('DOMContentLoaded', (event) => {
    const html = document.querySelector("html");
    const theme = sessionStorage.getItem("theme");
    
    if (theme === "dark") {
        html.setAttribute("data-bs-theme", "dark");
        document.getElementById("flexSwitchCkeckCheked").checked = true;
    } else {
        html.setAttribute("data-bs-theme", "light");
        document.getElementById("flexSwitchCkeckCheked").checked = false;
    }
});
</script>

</body>
</html>


