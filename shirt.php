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
<style type="text/css">
body{
   
   font-family: calibri;
   color: rgb(255,255,255);
   background-image:url("shatter.jpg"); padding-left:56px;}

   #links{ font-size:30px;font-family:calibri;text-align:right; padding-top: 55px;}
#links a{color:rgb(220,220,220); text-decoration:none;}
#links a:visited{color:rgb(220,220,220);}
#links a:hover{color:rgb(242, 62, 62);}


}

   </style>
	<title></title>
</head>


<body>
	
	  <div class='container'>

  <div class='row' >

  <div class='col'>
     <a href='fakery.php'>
     <img src="logo.png" height="150" width="450" id="logo" >
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
    <div class="col-md-6">
      
  <img id="myImage" src="sup.jpg" style="width:70%" style="float: right;" style=""> 
  <br><br>
  
  <img src="sup.jpg" height="54" width="50" onclick="document.getElementById('myImage').src='sup.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; "> 
      
  <img src="sup2.jpg" height="54" width="50" onclick="document.getElementById('myImage').src='sup2.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; ">
  
  
  
   </div>

 <div class='col-md-6'> 
  
  <p> <p style="font-family:Bungee; font-size:38px">
       Supreme Tee Shirt</p>
     
     Our T-shirts are made of the most comfortable, highest quality fabric out there today. The tri-blend cotton-poly mix comes from none other than Webweavs Apparel , while the printing is done right here in India by our partner Four Ambition. With these T-shirts, you not only feel the difference in comfort, but also feel the pride in bearing the logo of one of the world’s most famous names.
  </p>

  
  <form method="POST" action="shirt.php">

  	How many shirts
  <input type='number'  name="orderNum" value='1'>
  

<br><br>

select size: &nbsp;


  <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary ">
    <input type="radio" name="size" id="option1" autocomplete="off" value="size-Small " > Small
  </label>
  <label class="btn btn-secondary active">
    <input type="radio" name="size" id="option2" autocomplete="off" value="size-Med " checked> Med
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="size" id="option3" autocomplete="off" value="size-large "> Large
  </label>
  </div>

  <br><br>

  select Fit: &nbsp;

   <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="gender" id="option1" autocomplete="off" value="  Fit: male " checked > male
  </label>
  <label class="btn btn-secondary ">
    <input type="radio" name="gender" id="option2" autocomplete="off" value="   Fit: female" > female
  </label>
  
  </div>
<br><br>
  &nbsp; &nbsp;
 <button type='submit' class='btn btn-success' name="submit"> BUY NOW!!! </button>
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
      	$orderName="Supreme-tee-shirt";
      	$particulars=$_POST['size'].$_POST['gender'];

      	//sessions foe the order review
      	$_SESSION['orderNum']=$orderNum;
      	$_SESSION['orderName']=$orderName;
      	$_SESSION['particulars']=$particulars;
        // picture of the item
      	$_SESSION['itemPic']= "\"sup.jpg\"";
       
      
       if($_SESSION['loggedInStatus']==1)
     {
      	

	      header('Location:reviewOrder.php');

	     
        }

        else
        {
        	echo "<span style='color:orange;'>You Must login to order a product !!</span>";
        	echo " <br> <a href='login.php'> login here</a>";
            echo " <script>
                    alert('You must login to Order A product');  
                   </script>" ; 
            
        }

	      
      }
  

 
  
 ?> 
  
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
 
</body>
</html>