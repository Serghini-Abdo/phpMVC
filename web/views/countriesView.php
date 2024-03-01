<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title><?=$title ?></title>
</head>
<body>
<h1><?=$titre?></h1>


<ul class='nav nav-tabs' role='tablist'>
  <li class='nav-item' role='presentation'>
    <a class='nav-link active' id='simple-tab-0' data-bs-toggle='tab' href='#simple-tabpanel-0'
    role='tab' aria-controls='simple-tabpanel-0' aria-selected='true'>All countries</a>
  </li>
  <li class='nav-item' role='presentation'>
    <a class='nav-link' id='simple-tab-1' data-bs-toggle='tab' href='#simple-tabpanel-1' role='tab'
    aria-controls='simple-tabpanel-1' aria-selected='false'>By continent</a>
  </li>
  <li class='nav-item' role='presentation'>
    <a class='nav-link' id='simple-tab-2' data-bs-toggle='tab' href='#simple-tabpanel-2' role='tab'
    aria-controls='simple-tabpanel-2' aria-selected='false'>By language</a>
  </li>
</ul>
<div class='tab-content pt-5' id='tab-content'>
  <div class='tab-pane active' id='simple-tabpanel-0' role='tabpanel' aria-labelledby='simple-tab-0'>
    Tab 1 selected
    <?php
    echo"<div class='row row-cols-2 row-cols-md-4 g-4''>";
    foreach ($countries as $contr) {
        echo "
      <div class='col'>
        <div class='card'>
          <svg class='bd-placeholder-img card-img-top' width='100%' height='140' xmlns='http://www.w3.org/2000/svg'
          role='img' aria-label='Placeholder: Image cap' preserveAspectRatio='xMidYMid slice' focusable='false'>
          <title>Placeholder</title><rect width='100%' height='100%' fill='#868e96'></rect><text x='50%' y='50%'
          fill='#dee2e6' dy='.3em'>Image cap</text></svg>
          <div class='card-body'>
            <h5 class='card-title'>$contr->Name</h5>
            <p class='card-text'>Continent:$contr->Continent</p>
            <p class='card-text'>Region:$contr->Region</p>
            <p class='card-text'>Capital:$contr->Capital</p>
            <p class='card-text'>Leader:$contr->HeadOfState</p>
            <div class='hstack gap-3'>
            <button class='btn btn-primary p-2'><i class='fa-solid fa-shield-heart'></i></button>
            <a href='/phpMVC/details/$contr->Name' class='btn btn-primary p-2 ms-auto'>More</a>
          </div>
            

          </div>
        </div>
      </div>";
        
            
        }
        echo "</div>";
       

?>
    
  </div>
  <div class='tab-pane' id='simple-tabpanel-1' role='tabpanel' aria-labelledby='simple-tab-1'>
    <!--  -->

    <ul class="nav nav-tabs justify-content-center" role="tablist">
  
  <li class="nav-item" role="presentation" id="africa">
    <a class="nav-link active" data-bs-toggle="tab" href="#Africa" role="tab">Africa </a>
  </li>
  <li class="nav-item" role="presentation" id="asia">
    <a class="nav-link" data-bs-toggle="tab" href="#Asia" role="tab">Asia </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" data-bs-toggle="tab" href="#Europe" role="tab">Europe </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" data-bs-toggle="tab" href="#North_America" role="tab">North America </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" data-bs-toggle="tab" href="#South_America" role="tab">South America </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" data-bs-toggle="tab" href="#Oceania" role="tab">Oceania </a>
  </li>
</ul>
<div class="tab-content pt-5" id="tab-content">

  <div class="tab-pane active" id="Africa" role="tabpanel" aria-labelledby="fill-tab-0">
    <!--  -->
    <?php
    echo"<div class='row row-cols-2 row-cols-md-4 g-4''>";
    foreach ($africa as $contr) {
        echo "
      <div class='col'>
        <div class='card'>
          <svg class='bd-placeholder-img card-img-top' width='100%' height='140' xmlns='http://www.w3.org/2000/svg'
          role='img' aria-label='Placeholder: Image cap' preserveAspectRatio='xMidYMid slice' focusable='false'>
          <title>Placeholder</title><rect width='100%' height='100%' fill='#868e96'></rect><text x='50%' y='50%'
          fill='#dee2e6' dy='.3em'>Image cap</text></svg>
          <div class='card-body'>
            <h5 class='card-title'>$contr->Name</h5>
            <p class='card-text'>Continent:$contr->Continent</p>
            <p class='card-text'>Region:$contr->Region</p>
            <p class='card-text'>Capital:$contr->Capital</p>
            <p class='card-text'>Leader:$contr->HeadOfState</p>
            <div class='hstack gap-3'>
            <button class='btn btn-primary p-2'>Likes</button>
            <button class='btn btn-primary p-2 ms-auto'>More</button>
          </div>
            

          </div>
        </div>
      </div>";
        
            
        }
        echo "</div>";
       

?>
    <!--  -->
  </div>
  <div class="tab-pane" id="Asia" role="tabpanel" aria-labelledby="fill-tab-1">
  <?php
    echo"<div class='row row-cols-2 row-cols-md-4 g-4''>";
    foreach ($asia as $contr) {
        echo "
      <div class='col'>
        <div class='card'>
          <svg class='bd-placeholder-img card-img-top' width='100%' height='140' xmlns='http://www.w3.org/2000/svg'
          role='img' aria-label='Placeholder: Image cap' preserveAspectRatio='xMidYMid slice' focusable='false'>
          <title>Placeholder</title><rect width='100%' height='100%' fill='#868e96'></rect><text x='50%' y='50%'
          fill='#dee2e6' dy='.3em'>Image cap</text></svg>
          <div class='card-body'>
            <h5 class='card-title'>$contr->Name</h5>
            <p class='card-text'>Continent:$contr->Continent</p>
            <p class='card-text'>Region:$contr->Region</p>
            <p class='card-text'>Capital:$contr->Capital</p>
            <p class='card-text'>Leader:$contr->HeadOfState</p>
            <div class='hstack gap-3'>
            <button class='btn btn-primary p-2'>Likes</button>
            <button class='btn btn-primary p-2 ms-auto'>More</button>
          </div>
            

          </div>
        </div>
      </div>";
        
            
        }
        echo "</div>";
       

?>
  </div>
  <div class="tab-pane" id="Europe" role="tabpanel" aria-labelledby="fill-tab-2">
  <?php
    echo"<div class='row row-cols-2 row-cols-md-4 g-4''>";
    foreach ($europe as $contr) {
        echo "
      <div class='col'>
        <div class='card'>
          <svg class='bd-placeholder-img card-img-top' width='100%' height='140' xmlns='http://www.w3.org/2000/svg'
          role='img' aria-label='Placeholder: Image cap' preserveAspectRatio='xMidYMid slice' focusable='false'>
          <title>Placeholder</title><rect width='100%' height='100%' fill='#868e96'></rect><text x='50%' y='50%'
          fill='#dee2e6' dy='.3em'>Image cap</text></svg>
          <div class='card-body'>
            <h5 class='card-title'>$contr->Name</h5>
            <p class='card-text'>Continent:$contr->Continent</p>
            <p class='card-text'>Region:$contr->Region</p>
            <p class='card-text'>Capital:$contr->Capital</p>
            <p class='card-text'>Leader:$contr->HeadOfState</p>
            <div class='hstack gap-3'>
            <button class='btn btn-primary p-2'>Likes</button>
            <button class='btn btn-primary p-2 ms-auto'>More</button>
          </div>
            

          </div>
        </div>
      </div>";
        
            
        }
        echo "</div>";
       

?>
  </div>
  <div class="tab-pane" id="North_America" role="tabpanel" aria-labelledby="fill-tab-2">
  <?php
    echo"<div class='row row-cols-2 row-cols-md-4 g-4''>";
    foreach ($north as $contr) {
        echo "
      <div class='col'>
        <div class='card'>
          <svg class='bd-placeholder-img card-img-top' width='100%' height='140' xmlns='http://www.w3.org/2000/svg'
          role='img' aria-label='Placeholder: Image cap' preserveAspectRatio='xMidYMid slice' focusable='false'>
          <title>Placeholder</title><rect width='100%' height='100%' fill='#868e96'></rect><text x='50%' y='50%'
          fill='#dee2e6' dy='.3em'>Image cap</text></svg>
          <div class='card-body'>
            <h5 class='card-title'>$contr->Name</h5>
            <p class='card-text'>Continent:$contr->Continent</p>
            <p class='card-text'>Region:$contr->Region</p>
            <p class='card-text'>Capital:$contr->Capital</p>
            <p class='card-text'>Leader:$contr->HeadOfState</p>
            <div class='hstack gap-3'>
            <button class='btn btn-primary p-2'>Likes</button>
            <button class='btn btn-primary p-2 ms-auto'>More</button>
          </div>
            

          </div>
        </div>
      </div>";
        
            
        }
        echo "</div>";
       

?>
  </div>
  <div class="tab-pane" id="South_America" role="tabpanel" aria-labelledby="fill-tab-2">
  <?php
    echo"<div class='row row-cols-2 row-cols-md-4 g-4''>";
    foreach ($south as $contr) {
        echo "
      <div class='col'>
        <div class='card'>
          <svg class='bd-placeholder-img card-img-top' width='100%' height='140' xmlns='http://www.w3.org/2000/svg'
          role='img' aria-label='Placeholder: Image cap' preserveAspectRatio='xMidYMid slice' focusable='false'>
          <title>Placeholder</title><rect width='100%' height='100%' fill='#868e96'></rect><text x='50%' y='50%'
          fill='#dee2e6' dy='.3em'>Image cap</text></svg>
          <div class='card-body'>
            <h5 class='card-title'>$contr->Name</h5>
            <p class='card-text'>Continent:$contr->Continent</p>
            <p class='card-text'>Region:$contr->Region</p>
            <p class='card-text'>Capital:$contr->Capital</p>
            <p class='card-text'>Leader:$contr->HeadOfState</p>
            <div class='hstack gap-3'>
            <button class='btn btn-primary p-2'>Likes</button>
            <button class='btn btn-primary p-2 ms-auto'>More</button>
          </div>
            

          </div>
        </div>
      </div>";
        
            
        }
        echo "</div>";
       

?>
  </div>
  <div class="tab-pane" id="Oceania" role="tabpanel" aria-labelledby="fill-tab-2">
  <?php
    echo"<div class='row row-cols-2 row-cols-md-4 g-4''>";
    foreach ($oceania as $contr) {
        echo "
      <div class='col'>
        <div class='card'>
          <svg class='bd-placeholder-img card-img-top' width='100%' height='140' xmlns='http://www.w3.org/2000/svg'
          role='img' aria-label='Placeholder: Image cap' preserveAspectRatio='xMidYMid slice' focusable='false'>
          <title>Placeholder</title><rect width='100%' height='100%' fill='#868e96'></rect><text x='50%' y='50%'
          fill='#dee2e6' dy='.3em'>Image cap</text></svg>
          <div class='card-body'>
            <h5 class='card-title'>$contr->Name</h5>
            <p class='card-text'>Continent:$contr->Continent</p>
            <p class='card-text'>Region:$contr->Region</p>
            <p class='card-text'>Capital:$contr->Capital</p>
            <p class='card-text'>Leader:$contr->HeadOfState</p>
            <div class='hstack gap-3'>
            <button class='btn btn-primary p-2'>Likes</button>
            <button class='btn btn-primary p-2 ms-auto'>More</button>
          </div>
            

          </div>
        </div>
      </div>";
        
            
        }
        echo "</div>";
       

?>
  </div>
</div>
<!--  -->
  </div>
  <div class='tab-pane' id='simple-tabpanel-2' role='tabpanel' aria-labelledby='simple-tab-2'>
    Tab 3 selected</div>
</div>




    <!-- <table class='table table-striped'>
        <caption></caption>
        <thead>
    <tr>
        <th><i class='fa-solid fa-house'></i>Code</th>
        <th>Name</th>
        <th>Continent</th>
        <th>Operations</th>
    </tr>
    </thead>
    <?php
        // echo '<tbody>';
        // foreach ($list as $slr) {
        //     echo ' <tr>
        //     <th>$slr->Code</th>
        //     <th>$slr->Name</th>
        //     <th>$slr->Continent</th>
        //     <th><a href='/phpMVC/home'>home</a>  | <a href='/phpMVC/contact'>contact</a> |
        //      <a href='/phpMVC/detail'>Supprimer</a></th>
        // </tr>';
        // }
        // echo '</tbody>';

?>

    </table> -->

    

</body>
</html>
