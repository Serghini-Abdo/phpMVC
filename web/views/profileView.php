<!----------------------------------------NAVBAR---------------------------------------------->
<?php include_once __DIR__."/navBar.php" ?>


<div class="container-xl px-4 mt-4">
<form action="/phpMVC/updateP/<?=$user->email?>" method="post" enctype="multipart/form-data">
<div class="row gx-3 mb-3">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src='<?=$user->avatar?>'
                     alt="<?=$user->role?>" width="200px" height="200px">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <input class="btn btn-outline-primary" type="file"name="fileToUpload" id="fileToUpload" required >
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    
                     
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" name="fname" type="text"
                                 placeholder="Enter your first name" value="<?=$user->fname?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" name="lname" type="text"
                                 placeholder="Enter your last name" value="<?=$user->lname?>">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputCivName">civility</label>
                                <input class="form-control" id="inputCivName" type="text" name="civ"
                                placeholder="Enter your civility" value="<?=$user->civ?>">
                            </div>
                           
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputAddress">Address</label>
                                <input class="form-control" id="input" type="text" name="adr"
                                placeholder="Enter your location" value="<?=$user->adr?>">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" name="email"
                            placeholder="This is your email address" value="<?=$user->email?>" readonly>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                          
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="text" name="phone"
                                 placeholder="Enter your phone number" value="<?=$user->phone?>">
                            </div>
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="date" name="birth"name="birth"
                                placeholder="Enter your birthday" value="<?=$user->birth?>">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <input class="btn btn-outline-primary" type="submit" value="Save changes">
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>
</div>

