<?php  include("includes/header.php") ?>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
 <?php include("includes/sitebar.php") ?>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">

            <!-- Navbar Start -->
<?php  include("includes/top-nav.php") ?>
            <!-- Navbar End -->


            <!-- body Start -->

            <?php 
            if($_SESSION['user_type'] == 'Admin'){
                $sql = mysqli_query($conn, "SELECT * FROM users ORDER BY name ASC");
            }
            else if($_SESSION['user_type'] == 'User'){
            $sql = mysqli_query($conn , "SELECT * FROM users WHERE username = '$_SESSION[username]' && user_type != 'Admin' && user_type != 'Manager' && user_type != 'Student'  ORDER BY name ASC");
                
            }
            else if($_SESSION['user_type'] == 'Manager'){
            $sql = mysqli_query($conn , "SELECT * FROM users WHERE username = '$_SESSION[username]' && user_type != 'Admin' && user_type != 'User' || user_type = 'Student' ORDER BY name ASC");
                
            }
            else if($_SESSION['user_type'] == 'Student'){
            $sql = mysqli_query($conn , "SELECT * FROM users WHERE username = '$_SESSION[username]' && user_type != 'Admin' && user_type != 'User' && user_type != 'Manager'  ORDER BY name ASC");
                
            }
          

            // $sql = mysqli_query($conn , "SELECT * FROM users WHERE username = '$_SESSION[username]' || user_type = 'Admin'   ORDER BY name ASC");
            ?>

             <!-- Form Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="pagetitle">
      <h3 class="breadcrumb-item active">Manage users</h3>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Mange Users</li>
        </ol>
      </nav>
    </div>


                 <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                         
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">User Type</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($sql)):

                                        ?>
                                        <tr>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                            <td><?php echo $row['username']?></td>
                                            <td><?php echo $row['password']?></td>
                                            <td><?php echo $row['user_type']?></td>
                                          

                                            <td>
                                                
                                                  
                                                    <a href="  edituser.php?id=<?php echo $row['id']  ?>"  class="btn btn-outline-primary btn-sm">Update</a>           

                                                    
                                                 <?php if($_SESSION['user_type'] != 'User' && $_SESSION['user_type'] != 'Student') :?>
                                                    
                                                    <a href="Delete-user.php?id=<?php echo $row['id']  ?>"  class="btn btn-outline-danger btn-sm">Delete</a>  
                                                    
                                                    <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    


                        </div>
                    
                            

            <!-- body Revenue End -->

            <!-- Footer Start -->
<?php include("includes/footer.php") ?>        
            <!-- Footer End -->


        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <?php include("includes/js.php") ?>