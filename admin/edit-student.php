<?php 
ob_start(); 
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ensure you have a valid database connection
include("includes/conn.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM student WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $name_update = $row['name'];
        $email_update = $row['email'];
        $phone_update = $row['phone'];
        $grade_update = $row['grade'];
        $address_update = $row['address'];
        $contact_update = $row['emergency_phone'];
        $gender_update = $row['gender'];  
    } else {
        echo "Student not found.";
        exit();
    }
} else {
    echo "No ID provided.";
    exit();
}
?>

<?php include("includes/header.php") ?>
<!-- Spinner End -->

<!-- Sidebar Start -->
<?php include("includes/sitebar.php") ?>
<!-- Sidebar End -->

<!-- Content Start -->
<div class="content">

    <!-- Navbar Start -->
    <?php include("includes/top-nav.php") ?>
    <!-- Navbar End -->

    <!-- Body Start -->
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="pagetitle">
                <h3 class="breadcrumb-item active">Update Student</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Student</li>
                    </ol>
                </nav>
            </div>

            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <!-- Vertical Form -->
                    <form action="edit-student.php?id=<?php echo $id; ?>" method="post" class="row g-3">
                        <div class="col-12">
                            <label for="inputName4" class="form-label">Name</label>
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
                            <label for="address4" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address4" required name="address" value="<?php echo $address_update; ?>">
                        </div>
                        <div class="col-12">
                            <label for="grade4" class="form-label">Grade</label>
                            <select class="form-select" id="grade4" required name="grade">
                                <option selected>Select Grade</option>
                                <option value="Dugsi Sare (f4)" <?php echo ($grade_update == 'Dugsi Sare (f4)') ? 'selected' : ''; ?>>Dugsi Sare (f4)</option>
                                <option value="Dugsi Sare (f3)" <?php echo ($grade_update == 'Dugsi Sare (f3)') ? 'selected' : ''; ?>>Dugsi Sare (f3)</option>
                                <option value="Dugsi Sare (f2)" <?php echo ($grade_update == 'Dugsi Sare (f2)') ? 'selected' : ''; ?>>Dugsi Sare (f2)</option>
                                <option value="Dugsi Sare (f1)" <?php echo ($grade_update == 'Dugsi Sare (f1)') ? 'selected' : ''; ?>>Dugsi Sare (f1)</option>
                                <option value="Dugsi Dhexe (8)" <?php echo ($grade_update == 'Dugsi Dhexe (8)') ? 'selected' : ''; ?>>Dugsi Dhexe (8)</option>
                                <option value="Dugsi Dhexe (7)" <?php echo ($grade_update == 'Dugsi Dhexe (7)') ? 'selected' : ''; ?>>Dugsi Dhexe (7)</option>
                                <option value="Dugsi Dhexe (6)" <?php echo ($grade_update == 'Dugsi Dhexe (6)') ? 'selected' : ''; ?>>Dugsi Dhexe (6)</option>
                                <option value="Dugsi Hoose (5)" <?php echo ($grade_update == 'Dugsi Hoose (5)') ? 'selected' : ''; ?>>Dugsi Hoose (5)</option>
                                <option value="Dugsi Hoose (4)" <?php echo ($grade_update == 'Dugsi Hoose (4)') ? 'selected' : ''; ?>>Dugsi Hoose (4)</option>
                                <option value="Dugsi Hoose (3)" <?php echo ($grade_update == 'Dugsi Hoose (3)') ? 'selected' : ''; ?>>Dugsi Hoose (3)</option>
                                <option value="Dugsi Hoose (2)" <?php echo ($grade_update == 'Dugsi Hoose (2)') ? 'selected' : ''; ?>>Dugsi Hoose (2)</option>
                                <option value="Dugsi Hoose (1)" <?php echo ($grade_update == 'Dugsi Hoose (1)') ? 'selected' : ''; ?>>Dugsi Hoose (1)</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="emergency4" class="form-label">Emergency Phone</label>
                            <input type="text" class="form-control" id="emergency4" required name="emergency" value="<?php echo $contact_update; ?>">
                        </div>
                        <div class="col-12">
                            <label for="gender4" class="form-label">Gender</label>
                            <select class="form-select" id="gender4" required name="gender">
                                <option value="Male" <?php echo ($gender_update == 'Male') ? 'selected' : ''; ?>>Male</option>
                                <option value="Female" <?php echo ($gender_update == 'Female') ? 'selected' : ''; ?>>Female</option>
                            </select>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary" name="save">Update</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>

                    <?php 
                    if (isset($_POST['save'])) {
                        // Escape user inputs for security
                        $name = mysqli_real_escape_string($conn, $_POST['name']);
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                        $address = mysqli_real_escape_string($conn, $_POST['address']);
                        $grade = mysqli_real_escape_string($conn, $_POST['grade']);
                        $emergency = mysqli_real_escape_string($conn, $_POST['emergency']);
                        $gender = mysqli_real_escape_string($conn, $_POST['gender']);

                        // Update student in the database
                        $query = "UPDATE student SET name='$name', email='$email', phone='$phone', address='$address', grade='$grade', emergency_phone='$emergency', gender='$gender' WHERE id='$id'";

                        if (mysqli_query($conn, $query)) {
                            header("Location: manage_student.php");
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
    <!-- Body End -->

    <!-- Footer Start -->
    <?php include("includes/footer.php") ?>        
    <!-- Footer End -->
</div>
<!-- Content End -->

<!-- Back to Top -->
<?php include("includes/js.php") ?>
