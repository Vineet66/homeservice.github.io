<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->

    <style>
    
    *{
	margin: 0;
	padding: 0;
}

/*.center-div{
	position: relative;
	top: 10%;
	left: 50%;
	transform: translate(-50%, -50%);
}*/

.heading{
	width: 100%;
	line-height: 60px;
	font-size: 1.4rem;
	background: -webkit-linear-gradient(left, #0072ff, #8811c5);
	font-family: 'Staatliches', cursive;
}
        .sidenav {
  height: 100%;
  width: 210px;
  position: fixed;
  z-index: ;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 110px;
  /*margin-top: 30px;*/
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 24px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/*form{
	width: 400px;

}*/
    
    </style>
	<title></title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<?php  include 'links.php' ?> 
</head>
<body>

<div class=" ">
		<div class="heading text-center text-uppercase text-white mb-5" style="border-radius;10px;"> This is your admin panel 
			<?php echo $_SESSION['user']?> <a href="logout.php" class="btn btn-danger" style="float:right;margin-top:10px;padding-left:30px;">  Logout</a></div>
		
</div>
    <div class="sidenav">
  <a class="active" href="#" id="" onclick="getDisplayData();">Customers</a>
  <a href="#services" onclick="getDisplay();">Bookings</a>
  <a href="#clients">Orders</a>
  <a href="#contact">Contact</a>
</div>
    
    
    <div class="container" style="margin-left:200px;">
        <!--<button id=""  class="btn btn-danger" style="float:right;">Display Data</button><br>-->

    <div id="messageDisplay" style=""></div>
    
    
        
</div>
    <script>

      function getDisplayData()
      {
            $.ajax({
             url: "displayajax.php",
             dataType: "html",
             success: function(responsedata)
             {
                $("#messageDisplay").html(responsedata);
             }
         });
      }
        
        function getDisplay()
      {
            $.ajax({
             url: "dispajax.php",
             dataType: "html",
             success: function(responsedata)
             {
                $("#messageDisplay").html(responsedata);
             }
         });
      }
        
        $(document).on("click",".delete-btn",function(){
        var studentId = $(this).data("id");
        var element = this;
       
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: {id : studentId},
                success : function(data){
                  /*if(data == 1){
                 $(element).closest("tr").fadeOut();
                  }else{
                      $("#error-message").html("not delete").slideDown();
                      $("#success-message").slideUp();
                  }*/
                }
            });
        });
        
       
    </script>
    <!--<button  class="btn btn-danger" style="float:right;" id="displaydata">click</button><br>
    <div class="container" style="margin-left:200px;">
    <table class="table table-striped ">
        <thead>
        
        <th></th>
            <th>id</th>
            <th>name</th>
            <th>nummber</th>
            <th>city</th>
            <th>service</th>
            <th>address</th>
            <th>datetime</th>
        
        
        
        </thead>
        <tbody id="response">
        
        </tbody>
    
    
        </table></div>
    -->
    <!--<script>
    
    $(document).ready(function(){
        /*alert("ready");*/
    
        $('#displaydata').click(function(){
           $.ajax({
               
             url:'store.php',
             type:'POST',
             cache: false,  
               
             success:function(responsedata){
             $('#response').html(responsedata);
         }
         });
    });
    });
        
    </script>-->
    
</body>
</html>