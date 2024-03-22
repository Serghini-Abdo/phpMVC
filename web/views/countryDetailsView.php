<!----------------------------------------NAVBAR---------------------------------------------->
<?php include_once __DIR__."/navBar.php" ?>

<div class="container">
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <img src=<?=$country->flag?> class="card-img-top" alt=<?=$country->Name?> height="300px">
                <form action="/phpMVC/updateF/<?=$country->Name?>" method="post" enctype="multipart/form-data">
                <input class="btn btn-outline-primary " type="file"name="fileToUpload" id="fileToUpload" required >
                <input class="btn btn-outline-primary" type="submit" value="Update flag">
                </form>


                    <div class="invoice-title">
                        <h4 class="float-end font-size-15">CODE: <span class="badge bg-success font-size-12 ms-2"><?=$country->Code?></span></h4>
                        <div class="mb-4">
                           <h2 class="mb-1 text-muted"><?=$country->Name?></h2>
                        </div>
                        <div class="text-muted">
                            <p class="mb-1">Continent:  <?=$country->Continent?></p>
                            <p class="mb-1">Region:     <?=$country->Region?></p>
                            
                        </div>
                    </div>

                    <hr class="my-4">
                    <div class="card-body">
                        <table class="table user-view-table m-0">
                            <tbody>
                                <tr>
                                    <td>Leader:</td>
                                    <td><?=$country->HeadOfState?></td>
                                </tr>
                                <tr>
                                    <td>Capital:</td>
                                    <td><?=$country->Capital?></td>
                                </tr>
                                <tr>
                                    <td>Government form:</td>
                                <td><?=$country->GovernmentForm?></td>
                            </tr>
                                <tr>
                                    <td>Local name:</td>
                                    <td><?=$country->LocalName?></td>
                                </tr>
                            </tbody>
                            </table>
                            </div>
                    <hr class="my-4">

                    <div class="row">
        <div class="col-md-3 col-xl-4">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Population</h6>
                    <h2 class="text-right"><i class="fa fa-solid"><i class="fa-thin fa-person-arrow-up-from-line"></i></i><span>
                                <?=$country->Population?></span></h2>
                    
                </div>
            </div>
        </div>
        
        <div class="col-md-3 col-xl-4">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Surface</h6>
                    <h2 class="text-right"><i class="fa fa-sharp"><i class="fa-sharp fa-thin fa-ruler"></i></i><span>
                            <?=$country->SurfaceArea?></span></h2>
                    
                </div>
            </div>
        </div>
        
        <div class="col-md-3 col-xl-4">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Independence year</h6>
                    <h2 class="text-right"><i class="fa fa-solid"><i class="fa-thin fa-calendar-days"></i></i></i><span>
                                <?=$country->IndepYear?></span></h2>
                    
                </div>
            </div>
        </div>
        
        
	</div>

                 
            </div>
        </div><!-- end col -->
    </div>
</div>

<!----------------------------------------FOOTER---------------------------------------------->

<?php include_once __DIR__."/footer.php" ?>
