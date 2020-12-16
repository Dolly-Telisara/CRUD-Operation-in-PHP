<?php

$id = $_POST['id'];
$stud_name = $_POST['name'];
$stud_add = $_POST['address'];
$stud_class = $_POST['class'];
$stud_phn = $_POST['phone'];

include "config.php";

 $sql = "UPDATE student SET name = '{$stud_name}' , address = '{$stud_add}' , class = '{$stud_class}' , phone = '{$stud_phn}' WHERE id = $id";
 
 $result = mysqli_query($conn,$sql) or die("Query Unsuccessful !");

header("Location:http://localhost/CRUD/index.php");

?>