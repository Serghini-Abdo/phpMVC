<?php
namespace web\controllers\userController;
include_once __DIR__ .'/../../metier/metierServices.php';
use metier\metierServices\UserServices;

class UserController
{

//-----------------SIGNUP--------------



    public function signUp(){
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from the form
        
        $tab[1] = $_POST["lName"];
        $tab[0] = $_POST["fName"];
        $tab[2] = $_POST["email"];
        $tab[3] = $_POST["phone"];
        $tab[4] = $_POST["pass"];
        $metier = new UserServices();
        $resp=$metier->userRegister($tab);
        if ($resp['res']) {
          $_SESSION['email'] = $tab[2];
          echo '<script>window.location.href = "/phpMVC/";</script>';

          // header('Location: /phpMVC');
    
          
          
        }else{
          echo $resp['txt'];
        }
        
    } else {
        // Handle the case where the form was not submitted
        echo "Form was not submitted!";
    }
    }




//-----------------LOGIN--------------




    public function logIn(){
      // ljhdfo
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from the form
        $pwd = $_POST["userPass"];
        $email = $_POST["userEmail"];
        $metier = new UserServices();
        $resp=$metier->userLogIn($email, $pwd);
        $msg=$resp["txt"];
        if ($resp['res']) {
          $_SESSION['email'] = $email;
          echo $email;
          // header('Location: /phpMVC');
          echo '<script>window.location.href = "/phpMVC/";</script>';

          
          
        }else{
          echo "<script>alert('$msg')</script>";
          echo '<script>window.location.href = "/phpMVC/";</script>';

          
        }
        
    } else {
        // Handle the case where the form was not submitted
          echo "<script>alert('Form was not submitted!')</script>";
          echo '<script>window.location.href = "/phpMVC/";</script>';

    }
    }




//-----------------LOGOUT--------------



    public function logOut(){
      session_destroy();
      // header("Location: /phpMVC/");
      echo '<script>window.location.href = "/phpMVC/";</script>';

    }




//-----------------TOGGLE--USERBADGE---SIGNUP/LOGIN--------------



public function checkSession() {
        
        $id='sam';
        // Check session status
        // $stat=session_status();

        if (!empty($_SESSION['email']) ) {
          $email=$_SESSION['email'] ;
          $metier = new UserServices();
          $user=$metier->getUserInfo($email);
         
          

            if ($user->role == "admin") {
              echo "<div class='flex-shrink-0 dropdown'>
            <a href='#' class='d-block link-body-emphasis text-decoration-none
            dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
              <img src=$user->avatar  alt=$user->role
               width='40' height='40' class='rounded-circle'>
            </a>
            <ul class='dropdown-menu text-small shadow' style=''>
              <li><a class='dropdown-item' href='#'>$user->lname $user->fname</a></li>
              <li><a class='dropdown-item' href='/phpMVC/dashboard/'>dashbaord</a></li>
              <li><a class='dropdown-item' href='/phpMVC/profile'>Profile</a></li>
              <li><a class='dropdown-item' href='/phpMVC/plus'>Plus</a></li>
              <li><hr class='dropdown-divider'></li>
              <li><a class='dropdown-item' href='/phpMVC/form/logOut'>Sign out</a></li>
            </ul>
          </div>";
        } else {
          echo "<div class='flex-shrink-0 dropdown'>
            <a href='#' class='d-block link-body-emphasis text-decoration-none
            dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
              <img src=$user->avatar alt=$user->role
               width='40' height='40' class='rounded-circle'>
            </a>
            <ul class='dropdown-menu text-small shadow' style=''>
              <li><a class='dropdown-item' href='#'>$user->lname $user->fname</a></li>
              <li><a class='dropdown-item' href='/phpMVC/settings/'>Settings</a></li>
              <li><a class='dropdown-item' href='/phpMVC/profile'>Profile</a></li>
              <li><hr class='dropdown-divider'></li>
              <li><a class='dropdown-item' href='/phpMVC/form/logOut'>Sign out</a></li>
            </ul>
          </div>";
        }
      }else{
            echo "<li class='nav-item'>
            <!-- <a class='nav-link active' aria-current='page' href='/phpMVC/home'>Home</a> -->
            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#signupModal'
            data-bs-whatever='@mdo'>signup</button>
            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#loginModal'
            data-bs-whatever='@mdo'>login</button>
    
            <div class='modal fade' id='signupModal' tabindex='-1' aria-labelledby='exampleModalLabel'
            aria-hidden='true'>
            <div class='modal-dialog'>
            <div class='modal-content rounded-4 shadow'>
          <div class='modal-header p-5 pb-4 border-bottom-0'>
            <h1 class='fw-bold mb-0 fs-2'>Sign up for free</h1>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
    
          <div class='modal-body p-5 pt-0'>
            <form action='/phpMVC/form/signUp' method='post' class=''>
              <div class='form-floating mb-3'>
                <input type='text' class='form-control rounded-3' id='fName' name='fName' placeholder='Ahmed'>
                <label for='floatingInput'>First name</label>
              </div>
              <div class='form-floating mb-3'>
                <input type='text' class='form-control rounded-3' id='lName' name='lName' placeholder='Alaoui'>
                <label for='floatingInput'>Last name</label>
              </div>
              <div class='form-floating mb-3'>
                <input type='email' class='form-control rounded-3' id='email' name='email'
                 placeholder='name@example.com'>
                <label for='floatingInput'>Email address</label>
              </div>
              <div class='form-floating mb-3'>
                <input type='' class='form-control rounded-3' id='phone' name='phone' placeholder='0601010101'>
                <label for='floatingInput'>Phone number</label>
              </div>
              <div class='form-floating mb-3'>
                <input type='password' class='form-control rounded-3' id='pass' name='pass' placeholder='Password'>
                <label for='floatingPassword'>Password</label>
              </div>
              <button class='w-100 mb-2 btn btn-lg rounded-3 btn-primary' type='submit'>Sign Up</button>
              <small class='text-body-secondary'>By clicking Sign up, you agree to the terms of use.</small>
              
            </form>
          </div>
        </div>
            </div>
            </div>
            <div class='modal fade' id='loginModal' tabindex='-1' aria-labelledby='exampleModalLabel'
            aria-hidden='true'>
            <div class='modal-dialog'>
            <div class='modal-content rounded-4 shadow'>
          <div class='modal-header p-5 pb-4 border-bottom-0'>
            <h1 class='fw-bold mb-0 fs-2'>logIn</h1>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
    
          <div class='modal-body p-5 pt-0'>
            <form action='/phpMvc/form/logIn' method='post' class=''>
              <div class='form-floating mb-3'>
                <input type='text' class='form-control rounded-3' id='userEmail' name='userEmail'
                 placeholder='name@example.com'>
                <label for='floatingInput'>Email address</label>
              </div>
              <div class='form-floating mb-3'>
                <input type='password' class='form-control rounded-3' id='userPass' name='userPass'
                 placeholder='Password'>
                <label for='floatingPassword'>Password</label>
              </div>
              <button class='w-100 mb-2 btn btn-lg rounded-3 btn-primary' type='submit'>Log In</button>
              <button class='w-100 mb-2 btn btn-lg rounded-3 btn-secondary' type='button' class='btn btn-primary'
               data-bs-toggle='modal' data-bs-target='#signupModal'
              data-bs-whatever='@mdo'>Not registered yet</button>
              
              
            </form>
          </div>
        </div>
            </div>
            </div>
    
            </li>";
        }
    }
}



