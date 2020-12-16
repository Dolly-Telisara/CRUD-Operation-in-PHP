<?php

    $stud_id = $_GET['id'];

    include "config.php";
    
    $sql = "DELETE FROM student WHERE id = {$stud_id}";
    
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful !");

    header("Location: http://localhost/DOLLY/CRUD/index.php");

    mysqli_close($conn);

?>