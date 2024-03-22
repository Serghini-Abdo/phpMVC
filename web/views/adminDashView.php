<!----------------------------------------NAVBAR---------------------------------------------->
<?php include_once __DIR__."/navBar.php" ?>

<div class="container mt-2">
    <div class="row">
        <div class="col-12 mb-3 mb-lg-5">
            <div class="overflow-hidden card table-nowrap table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Registered users</h5>
                    
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="small text-uppercase bg-body text-muted">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Age</th>
                                <th>Role</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                
                            foreach ($users as $user) {
                                echo "<tr class='align-middle'>
                                <td>
                                    <div class='d-flex align-items-center '>
                                    <img src=$user->avatar  alt=$user->role
                                    width='40' height='40' class='rounded-circle me-2'><div>
                                        <div class='h6 mb-0 lh-1'>$user->fname $user->lname</div>
                                        </div>
                                    </div>
                                </td>
                                <td>$user->email</td>
                               
                                <td><span>$user->phone</span></td>
                                <td>$user->adr</td>
                                <td>$user->birth</td>
                                <td>$user->role</td>
                                <td class='text-end'>
                                    <div class='drodown'>
                                        <a data-bs-toggle='dropdown' href='#' class='btn p-1' aria-expanded='false'>
                                  <i class='fa fa-bars' aria-hidden='true'></i>
                                </a>
                                        <div class='dropdown-menu dropdown-menu-end' style=''>
                                            <a href='/phpMVC/profile/$user->email' class='dropdown-item'>View Details</a>
                                            <a href='#!' class='dropdown-item btn btn-danger'>Delete user</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>";
                            }
                            ?>

                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>