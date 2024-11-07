
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



   
            <!-- body Start -->
             <!-- Form Start -->
             <div class="container-fluid pt-4 px-4">

             
                <div class="row g-4">

                <div class="pagetitle">
      <h3 class="breadcrumb-item active">Register User</h3>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Add User</li>
        </ol>
      </nav>
    </div>

                    <div class="col-sm-12 col-xl-6">


                        <div class="bg-light rounded h-100 p-4">
                        
    <!-- Vertical Form -->
    <form action="adduser.php" method="post" class="row g-3">
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Your Name</label>
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
                  <label for="userName4" class="form-label">User Name</label>
                  <input type="text" class="form-control" id="userName4" required
                  name=username>
                </div>

      <div class="col-12">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" required
        name="password">
      </div>


      <div class="col-12">
      <label for="inputUserType4" class="form-label">User Type</label>
      <select class="form-select" id="inputUserType4" required
      name="usertype" >
                                    <option selected>Select User Type</option>
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Student">Student</option>

                                </select>
                                </div>                         
                                
     
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary"name="save">Register</button>
        <button type="reset" class="btn btn-secondary" >Reset</button>
      </div>
    </form>

    <?php 
                           
  if (isset($_POST['save'])) {
      // Escape user inputs for security
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $phone = mysqli_real_escape_string($conn, $_POST['phone']);
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $user_type = mysqli_real_escape_string($conn, $_POST['usertype']);
            // Insert user into the database
            $query = "INSERT INTO users (name, email, phone, username, password, user_type) VALUES ('$name', '$email', '$phone', '$username', '$password', '$user_type')";
            
            if (mysqli_query($conn, $query)) {
                // Store user information in session  
                

                    // Redirect to a welcome page or user dashboard
                    header("Location: manage_users.php");
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