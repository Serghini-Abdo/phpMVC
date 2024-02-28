<?php
namespace web\controllers\userController;
include_once __DIR__ .'/../../metier/metierServices.php';
use metier\metierServices\UserServices;

final class UserController
{
    public function checkSession() {
        
        $id='sam';
        // Check session status
        $session_status = session_status();

        if ($session_status === PHP_SESSION_ACTIVE) {
            echo "<div class='flex-shrink-0 dropdown'>
            <a href='#' class='d-block link-body-emphasis text-decoration-none
            dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
              <img src='https://github.com/mdo.png' alt='mdo' width='40' height='40' class='rounded-circle'>
            </a>
            <ul class='dropdown-menu text-small shadow' style=''>
              <li><a class='dropdown-item' href='#'>$id</a></li>
              <li><a class='dropdown-item' href='#'>Settings</a></li>
              <li><a class='dropdown-item' href='#'>Profile</a></li>
              <li><hr class='dropdown-divider'></li>
              <li><a class='dropdown-item' href='#'>Sign out</a></li>
            </ul>
          </div>";
        } else {
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
            <form class=''>
              <div class='form-floating mb-3'>
                <input type='email' class='form-control rounded-3' id='floatingInput' placeholder='name@example.com'>
                <label for='floatingInput'>Email address</label>
              </div>
              <div class='form-floating mb-3'>
                <input type='password' class='form-control rounded-3' id='floatingPassword' placeholder='Password'>
                <label for='floatingPassword'>Password</label>
              </div>
              <button class='w-100 mb-2 btn btn-lg rounded-3 btn-primary' type='submit'>Sign up</button>
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
            <form class=''>
              <div class='form-floating mb-3'>
                <input type='email' class='form-control rounded-3' id='floatingInput' placeholder='name@example.com'>
                <label for='floatingInput'>Email address</label>
              </div>
              <div class='form-floating mb-3'>
                <input type='password' class='form-control rounded-3' id='floatingPassword' placeholder='Password'>
                <label for='floatingPassword'>Password</label>
              </div>
              <button class='w-100 mb-2 btn btn-lg rounded-3 btn-primary' type='submit'>log In</button>
              
              
            </form>
          </div>
        </div>
            </div>
            </div>
    
            </li>";
        }
    }
}



