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
    $sql = mysqli_query($conn, "SELECT * FROM student WHERE grade = 'Dugsi Dhexe (6)'");
    ?>


            <!-- body Start -->

          

             <!-- Form Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="pagetitle">
      <h3 class="breadcrumb-item active">Attendence</h3>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Manage Attendence</li>
        </ol>
      </nav>
    </div>


                 <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                         
                            <div class="table-responsive">

        <h2 class="mb-4">Student Attendance</h2>
        <div class="mb-4">
        <button class="btn btn-primary" onclick="markAllPresent()">All Present</button>
        <button class="btn btn-danger" onclick="markAllAbsent()">All Absent</button>
        </div>
        <table class="table table-bordered attendance-table">
            <thead class="thead-dark">
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Present</th>
                    <th>Absent</th>
                    <th>Attendance %</th>
                </tr>
            </thead>
            <tbody id="attendanceBody">
            <?php
                                        while ($row = mysqli_fetch_assoc($sql)):

                                        ?>
                <tr>
                    <td>1</td>
                    <td class="student-name"><?php echo $row['name'] ?></td>
                    <td><input type="radio" name="attendance-1" value="present" onchange="calculateAttendance(1)"></td>
                    <td><input type="radio" name="attendance-1" value="absent" onchange="calculateAttendance(1)"></td>
                    <td class="attendance-percentage" id="attendance-1-percent">0%</td>
                </tr>
                <?php endwhile; ?>
                                        </tr>
             
                <!-- Add more rows as needed -->
            </tbody>
        </table>
       
        <button class="btn btn-success" type="submit" name="save" id="save" >Save</button>
    </div>
       
    </div>
    <script>
        function calculateAttendance(studentId) {
            const totalDays = 1;  // Change this to the number of days in the period you're tracking
            const present = document.querySelector(`input[name="attendance-${studentId}"][value="present"]`).checked;
            const attendancePercentage = present ? 100 : 0;
            document.getElementById(`attendance-${studentId}-percent`).innerText = `${attendancePercentage}%`;
        }

        function markAllPresent() {
            const radios = document.querySelectorAll('input[type="radio"][value="present"]');
            radios.forEach(radio => {
                radio.checked = true;
                calculateAttendance(radio.name.split('-')[1]);
            });
        }

        function markAllAbsent() {
            const radios = document.querySelectorAll('input[type="radio"][value="absent"]');
            radios.forEach(radio => {
                radio.checked = true;
                calculateAttendance(radio.name.split('-')[1]);
            });

        }
    </script>
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