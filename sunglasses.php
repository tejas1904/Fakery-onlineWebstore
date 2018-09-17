<?php
       session_start();

         error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href='https://fonts.googleapis.com/css?family=Bungee ' rel='stylesheet'>

	<title></title>

  <style type="text/css">
body{
   
   font-family: calibri;
   color: rgb(255,255,255);
   background-image:url("shatter.jpg"); padding-left:56px;}

   #links{ font-size:30px;font-family:calibri;text-align:right; padding-top: 55px;}
#links a{color:rgb(220,220,220); text-decoration:none;}
#links a:visited{color:rgb(220,220,220);}
#links a:hover{color:rgb(242, 62, 62);}

   </style>

</head>
<body>

  <div class='container'>

  <div class='row' >

  <div class='col'>
     <a href='fakery.php'>
     <img src="logo.png" height="150" width="450" id="logo">
     </a>
</div>

<div class='col'>
<div class="header">
<div class="link" id="links">
 <a href="login.php"> &nbsp;login &nbsp;&nbsp;</a>
 <a href="signUp.php"> &nbsp;Sign Up &nbsp;</a>
 <a href="About.php"> &nbsp;Products &nbsp;</a>
 <a href="About.php"> &nbsp;About &nbsp;</a>
</div> 
</div>  
</div>
</div>
   


     <div class='row'>
      <div class='col'>
  
   <h2> Sunglasses</h2>
 </div>
</div>
  
  <div class='row'>
    <div class='col-md-7'>

      <br><br>
      <img id="myImage" src="sunglass2.jpg" style="width:100%" style="float: right;" style=""> 
  <br><br>
  
  <img src="sunglass.jpg" height="40" width="80" onclick="document.getElementById('myImage').src='sunglass.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; "> 
      
  <img src="sunglass2.jpg" height="40" width="80" onclick="document.getElementById('myImage').src='sunglass2.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; ">
  
   <img src="sunglass3.jpg" height="40" width="80" onclick="document.getElementById('myImage').src='sunglass3.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; "> 

  <img src="sunglass4.jpg" height="40" width="80" onclick="document.getElementById('myImage').src='sunglass4.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; "> 
  
  
   </div>
  
  <div class='col-md-5'>

   <p style="font-family:Bungee; font-size:38px"> <br> Sunglasses for the beach </p>

   <p>Are you tired of the continuous headaches because of the sun’s intense glare every day? Or you want to protect your eyesight from the harmful UV rays? At lenskart, we have a solution to all your problems. There is a pair of sunglasses to cater to your needs.</p><br>

  

  <p>Light weight and crafted in the classic wayfarer design, the high-tech mirror coated lenses are fabricated using the CR39 material which has the highest resistance to scratches. And the youthful colour scheme of the sunglasses is something to die for!<br>

  
  <form method="POST" action="sunglasses.php">
  	<input type='number' value=1 name="orderNum"> <b>Pairs</b> <br><br>
  <button type="submit" name='submit' class='btn btn-success'> BUY NOW!!! </button>
   </form>
 </div>

</div>
</div>

<?php

      if(isset(($_POST['submit'])))
     {
      	$conn=mysqli_connect("localhost","root","","fakery");

      	$user=$_SESSION['userEmail'];
      	$orderNum=$_POST['orderNum'];
      	$orderName="Beach-Sunglasses";
        $particulars="no particulars";

          //sessions foe the order review
        $_SESSION['orderNum']=$orderNum;
        $_SESSION['orderName']=$orderName;
        $_SESSION['particulars']=$particulars;
        // picture of the item
        $_SESSION['itemPic']= "\"ssunglass1.jpg\"";
       
       if($_SESSION['loggedInStatus']==1)
     {
      	 header('Location:reviewOrder.php');

        
        }

        else
        {
        	echo "<span style='color:orange;'>You Must login to order a product !! </span>";
            echo " <script>
                   alert('You must login to Order A product');  
                   </script>" ; 
            
        }

	      
      }
  

 
  
 ?> 
  
 
 
</body>
</html>