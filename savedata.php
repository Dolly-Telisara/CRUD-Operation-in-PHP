<?php

 $stud_name = $_POST['name'];
 $stud_add = $_POST['address'];
 $stud_class = $_POST['class'];
 $stud_phn = $_POST['phone'];

 include "config.php";
    
 $sql = "INSERT INTO student(name,address,class,phone) VALUES ('{$stud_name}','{$stud_add}','{$stud_class}','{$stud_phn}')";
 $result = mysqli_query($conn,$sql) or die("Query Unsuccessful !");

header("Location:http://localhost/CRUD/index.php");

 ?>