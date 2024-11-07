<?php 
ob_start(); 
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ensure you have a valid database connection
include("includes/conn.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM manager WHERE id =$id";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $name_update = $row['name'];
        $email_update = $row['email'];
        $phone_update = $row['phone'];
        $contact_update = $row['emergency_phone'];
        $address_update = $row['address'];
        $gender_update = $row['gender'];  
    } else {
        echo "Manager not found.";
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

    <!-- body Start -->
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="pagetitle">
                <h3 class="breadcrumb-item active">Update Manager</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Manager</li>
                    </ol>
                </nav>
            </div>

            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <!-- Vertical Form -->
                    <form action="edit-manage.php?id=<?php echo $id; ?>" method="post" class="row g-3">
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
                            <label for="contact4" class="form-label">Emergency Contact</label>
                            <input type="text" class="form-control" id="contact4" required name="contact" value="<?php echo $contact_update; ?>">
                        </div>
                        <div class="col-12">
                            <label for="address4" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address4" required name="address" value="<?php echo $address_update; ?>">
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
                        $name = mysqli_real_escape_string($conn, $_POST['name']);
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                        $contact = mysqli_real_escape_string($conn, $_POST['contact']);
                        $address = mysqli_real_escape_string($conn, $_POST['address']);
                        $gender = mysqli_real_escape_string($conn, $_POST['gender']);

                        $query = "UPDATE manager SET name='$name', phone='$phone', email='$email', address='$address', emergency_phone='$contact', gender='$gender' WHERE id='$id'";

                        if (mysqli_query($conn, $query)) {
                            header("Location: manage_manger.php");
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
    <!-- body End -->

    <!-- Footer Start -->
    <?php include("includes/footer.php") ?>        
    <!-- Footer End -->
</div>
<!-- Content End -->

<!-- Back to Top -->
<?php include("includes/js.php") ?>
