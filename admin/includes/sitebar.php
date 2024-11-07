<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <!---<h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                    -->
                    <img src="img/pnglogo.png" alt="" style="width: 150px; height: 100px; me-2">
                </a>
                
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>


                     <!--users start-->
                    


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="adduser.php" class="dropdown-item">Add User</a>
                            <a href="manage_users.php" class="dropdown-item">Manage User</a>
                        </div>
                    </div>
                     <!--users end-->
                  
                    <?php if($_SESSION['user_type'] != 'User') : ?>
                    <!--managers start-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-tie me-2"></i>Managers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_manager.php" class="dropdown-item">Add Manager</a>
                            <a href="manage_manger.php" class="dropdown-item">Manage Manager</a>
                        </div>
                    </div>
                    <!--managers end-->
                      <?php  endif; ?>
                        <!--teachers start-->
                            <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-chalkboard-teacher me-2"></i>Techers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_teacher.php" class="dropdown-item">Add Teacher</a>
                            <a href="manage_teacher.php" class="dropdown-item">Manage Teacher</a>
                        </div>
                    </div>
                    <!--techers end-->

                     <!--students start-->
                     <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-graduate me-2"></i>Students</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_student.php" class="dropdown-item">Add Student</a>
                            <a href="manage_student.php" class="dropdown-item">Manage Student</a>
                        </div>
                    </div>
                    <!--students end-->

                      <!--subjects start-->
                      <div class="nav-item ">
                        <a href="manage-subject.php" class="nav-link " data-bs-toggle=""><i class="fa fa-chalkboard me-2"></i>Subjects</a>

                    </div>
                    <!--subjects end-->

                    <!--enrollment start-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-tasks me-2"></i>Enrolments</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add-enrolment.php" class="dropdown-item">Add Enrolment</a>
                            <a href="manage-enrolment.php" class="dropdown-item">Manage Enrolment</a>
                        </div>
                    </div>
                    <!--enrolment end-->

                     <!--classSchedule start-->
                     <div class="nav-item">
                        <a href="showclass.chedull.php" class="nav-link" data-bs-toggle=""><i class="fa fa-clipboard-list me-2"></i>Class Schedule</a>
                     
                        </div>
                    <!--classSchedule end-->

                    <!--fees start-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-comment-dollar me-2"></i>Fees</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add-fees.php" class="dropdown-item">Add Fees</a>
                            <a href="manage-fees.php" class="dropdown-item">Manage Fees</a>
                        </div>
                    </div>
                    <!--fees end-->

                    <!--student-fees start-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-money-check me-2"></i>Student Fees</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add-stdfees.php" class="dropdown-item">Add Student Fees</a>
                            <a href="manage-stdfees.php" class="dropdown-item">Manage Student Fees</a>
                        </div>
                    </div>
                    <!--student-fees end-->

                    <!--exams start-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-diagnoses me-2"></i>Exams</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add-exam.php" class="dropdown-item">Add Exam</a>
                            <a href="manage-exam.php" class="dropdown-item">Manage Exams</a>
                        </div>
                    </div>
                    <!--exam end-->

                    <!--grdes start-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-stream me-2"></i>Grades</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add-grade.php" class="dropdown-item">Add Grade</a>
                            <a href="manage-grade.php" class="dropdown-item">Manage Grades</a>
                            <a href="show-grade.php" class="dropdown-item">Show Grades</a>
                        </div>
                    </div>
                    <!--grades end-->

                     <!--attendence start-->
                     <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-check me-2"></i>Attendence</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="attendence.php" class="dropdown-item">Manage Attendence</a>
                            <a href="show-attendence.php" class="dropdown-item">Show Attendences</a>
                        </div>
                    </div>
                    <!--attendence end-->

                     <!--clases start-->
                     <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-warehouse me-2"></i>clases</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add-classes.php" class="dropdown-item">Add Classes</a>
                            <a href="manage-clasess.php" class="dropdown-item">Manage Classes</a>
                        </div>
                    </div>
                    <!--clases end-->

                        <!--departments start-->
                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-city me-2"></i>Departments</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add-department.php" class="dropdown-item">Add Department</a>
                            <a href="manage-department.php" class="dropdown-item">Manage Departments</a>
                        </div>
                    </div>
                    <!--departments end-->

                        <!--otherstaff start-->
                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-clipboard-check me-2"></i>Other Staff</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add-staff.php" class="dropdown-item">Add Staff</a>
                            <a href="manage-staff.php" class="dropdown-item">Manage Staff</a>
                        </div>
                    </div>
                    <!--otherstaff end-->

                    <a href="signout.php" class="nav-item nav-link"><i class="fa fa-sign-out-alt me-2"></i>Sign Out</a>
                    </div>

                  
                </div>
            </nav>
        </div>