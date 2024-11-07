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
            $sql = mysqli_query($conn , "SELECT * FROM student");
            ?>

             <!-- Form Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="pagetitle">
      <h3 class="breadcrumb-item active">Manage student</h3>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Mange student</li>
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
                                            <th scope="col">Address</th>
                                            <th scope="col">Grade</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Emergency</th>
                                            <th scope="col">Gender</th>
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
                                           
                                            <td><?php echo $row['address']?></td>

                                            <td><?php echo $row['grade']?></td>

                                            <td><?php echo $row['date']?></td>
                                            <td><?php echo $row['emergency_phone']?></td>
                                            <td><?php echo $row['gender']?></td>
                                          
                                          

                                            <td>
                                                
                                            <a href="edit-student.php?id=<?php echo $row['id']  ?>"  class="btn btn-outline-info btn-sm">Update</a>

                                                    

                                                    
                                                    <a href="Delete-student.php?id=<?php echo $row['id']  ?>"  class="btn btn-outline-danger btn-sm">Delete</a> 
                                                
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