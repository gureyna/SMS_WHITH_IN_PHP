<?php  ob_start(); ?>
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

            <?php
            ob_start();
            ?>


   
            <!-- body Start -->
             <!-- Form Start -->
             <div class="container-fluid pt-4 px-4">

             
                <div class="row g-4">

                <div class="pagetitle">
      <h3 class="breadcrumb-item active">Register Manager</h3>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Add Manager</li>
        </ol>
      </nav>
    </div>

                    <div class="col-sm-12 col-xl-6">


                        <div class="bg-light rounded h-100 p-4">
                        
    <!-- Vertical Form -->
    <form action="add_manager.php" method="post" class="row g-3">
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputNanme4 " name="name" required>
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" required
        name="email">
      </div>

      <div class="col-12">
                  <label for="inputPhone4" class="form-label">Phone</label>
                  <input type="text" class="form-control" id="inputPhone4" required
                  name="phone">
                </div>

                <div class="col-12">
                  <label for="contact4" class="form-label">Emergency_contact</label>
                  <input type="text" class="form-control" id="contact4" required
                  name=contact>
                </div>
                <div class="col-12">
                  <label for="address4" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address4" required
                  name=address>
                </div>

   


      <div class="col-12">
      <label for="gender4" class="form-label">Gender</label>
      <select class="form-select" id="gender4" required
      name="gender" >
                                    <option selected>Select  Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    

                                </select>
                                </div>                         
                                
     
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary btn-sm"name="save">Register</button>
        <button type="reset" class="btn btn-secondary btn-sm" >Reset</button>
      </div>
    </form>

    <?php 
                           
                           if (isset($_POST['save'])) {
                               // Escape user inputs for security
                               $name = mysqli_real_escape_string($conn, $_POST['name']);
                               $email = mysqli_real_escape_string($conn, $_POST['email']);
                               $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                               $contact = mysqli_real_escape_string($conn, $_POST['contact']);
                               $address = mysqli_real_escape_string($conn, $_POST['address']);
                               $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   
                               // Hash the password
                               
   
                               // Insert user into the database
                               $query = "INSERT INTO manager (name, email, phone, emergency_phone, address, gender) VALUES ('$name', '$email', '$phone', '$contact', '$address', '$gender')";
                               
                               if (mysqli_query($conn, $query)) {
                                   // Store user information in session
                                  
   
                                   // Redirect to a welcome page or user dashboard
                                   header("Location: manage_manger.php");
                                   exit();
                               } else {
                                   echo "Error: " . $query . "<br>" . mysqli_error($conn);
                               }
                           }
                           
                           ?>




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