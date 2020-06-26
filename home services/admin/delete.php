
<?php 

include 'connection.php';

$student_Id = $_POST['id'];
$deletequery = " delete from app where id=$student_Id ";
$query = mysqli_query($con,$deletequery);
/*header('location:adminmainpage.php');*/






?>