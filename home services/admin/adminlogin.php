<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	// echo "conenction successful";
}else{
	echo "no connection";
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
    *{
	margin: 0;
	padding: 0;
}

.center-div{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.heading{
	width: 100%;
	line-height: 80px;
	font-size: 1.4rem;
	background: -webkit-linear-gradient(left, #0072ff, #8811c5);
	font-family: 'Staatliches', cursive;
}

form{
	width: 400px;

}
    
    
    </style>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<?php  include 'links.php' ?> 
</head>
<body>

<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white"> ADMIN LOGIN PAGE </div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form action="logincheck.php" method="POST">
						<div class="form-group">
							<label>Email ID</label>
							<input type="text" name="user" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="pass" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" class="btn btn-success" name="submit">
				</form>
			</div>
		</div>
	</div>
</header>

</body>
</html>