




<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/phpMVC/home/continent"><i class="fa-solid fa-earth-africa"></i> World</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><!-- <i class="fa-solid fa-bars"></i> --></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/phpMVC/home/countries">
            <i class="fa-solid fa-flag"></i> Countries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/phpMVC/home/citys"><i class="fa-solid fa-city"></i> Citys</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      
      <ul class="nav justify-content-end">
        
        <?php
          include_once __DIR__ ."/../controllers/userController.php";
          use web\controllers\userController\UserController;
          $badge=new UserController();
          $badge->checkSession();
        ?>
        <!-------------------------------toggle light and dark mode--------------------------------------->
        <li class="nav-item">
            <div class="toggle-switch">
            <label class="switch-label">
            <input type="checkbox" class="checkbox"
            id="flexSwitchCkeckCheked"
            unchecked
            onclick="toggleMode()">
            <span class="slider"></span>
            </label>
            </div>
        </li>
        
        
      </ul>
      
    </div>
  </div>
</nav>

