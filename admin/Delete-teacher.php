<?php 
    include("includes/conn.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM teacher WHERE id = $id";
        $result = mysqli_query($conn , $query);
        
        header("Location: manage_teacher.php");
        
    }