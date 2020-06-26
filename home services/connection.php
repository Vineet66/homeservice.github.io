<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'apply';


$con = mysqli_connect($server,$username,$password,$db);

if($con){
    
    /*echo"connection sucess";*/
    ?>
<script>
/*alert('connection suessful');*/

</script>

<?php
}else{
 /*   echo"no connection";*/
}

?>

