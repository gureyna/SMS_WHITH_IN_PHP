<?php 
ob_start(); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php include("includes/header.php") ?>
<!-- Spinner End -->
<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name_update = $row['name'];
    $username_update = $row['username'];
    $password_update = $row['password'];
    $user_type_update = $row['user_type'];
    $email_update = $row['email'];
    $phone_update = $row['phone'];  
}     
?>

<!-- Sidebar Start -->
<?php include("includes/sitebar.php") ?>
<!-- Sidebar End -->

<!-- Content Start -->
<div class="content">

    <!-- Navbar Start -->
    <?php include("includes/top-nav.php") ?>
    <!-- Navbar End -->

    <!-- body Start -->
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="pagetitle">
                <h3 class="breadcrumb-item active">Update User</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </nav>
            </div>

            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <!-- Vertical Form -->
                    <form action="edituser.php?id=<?php echo $id; ?>" method="post" class="row g-3">
                        <div class="col-12">
                            <label for="inputName4" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="inputName4" name="name" required value="<?php echo $name_update; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" required name="email" value="<?php echo $email_update; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputPhone4" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="inputPhone4" required name="phone" value="<?php echo $phone_update; ?>">
                        </div>
                        <div class="col-12">
                            <label for="userName4" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="userName4" required name="username" value="<?php echo $username_update; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" required name="password" value="<?php echo $password_update; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputUserType4" class="form-label">User Type</label>
                            <select class="form-select" id="inputUserType4" required name="usertype">
                                <option selected>Select User Type</option>
                                <option value="User" <?php echo ($user_type_update == 'User') ? 'selected' : ''; ?>>User</option>
                                <option value="Admin" <?php echo ($user_type_update == 'Admin') ? 'selected' : ''; ?>>Admin</option>
                                <option value="Manager" <?php echo ($user_type_update == 'Manager') ? 'selected' : ''; ?>>Manager</option>
                                <option value="Teacher" <?php echo ($user_type_update == 'Teacher') ? 'selected' : ''; ?>>Teacher</option>
                                <option value="Student" <?php echo ($user_type_update == 'Student') ? 'selected' : ''; ?>>Student</option>
                            </select>
                        </div>                         
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>

                    <?php 
                    if (isset($_POST['update'])) {
                        // Escape user inputs for security
                        $name = mysqli_real_escape_string($conn, $_POST['name']);
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                        $username = mysqli_real_escape_string($conn, $_POST['username']);
                        $password = mysqli_real_escape_string($conn, $_POST['password']);
                        $user_type = mysqli_real_escape_string($conn, $_POST['usertype']);

                        // Insert user into the database
                        $query = "UPDATE users SET name='$name', password='$password', email='$email', phone='$phone', username='$username', user_type='$user_type' WHERE id='$id'";
                        
                        if (mysqli_query($conn, $query)) {
                            header("Location: manage_users.php");
                            exit();
                        } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($conn);
                        }
                    }
                    ?>
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
