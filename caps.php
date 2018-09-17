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
      
  <img id="myImage" src="images/hatnb.jpeg" style="width:100%" style="float: right;" style=""> 
  <br><br>


  
  <img src="images/hatnb.jpeg" height="45" width="75" onclick="document.getElementById('myImage').src='images/hatnb.jpeg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; "> 
      
  <img src="images/hatnb1.jpeg" height="45" width="75" onclick="document.getElementById('myImage').src='images/hatnb1.jpeg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; ">

  

  <img src="images/hatnb3.jpeg" height="45" width="75" onclick="document.getElementById('myImage').src='images/hatnb3.jpeg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; "> 

    



  
  
  
   </div>

 <div class='col-md-6'> 
  
   <p style="font-family:Bungee; font-size:38px">
       NIKE SB Hat Icon Pro </p>
     
    <p> The Icon Pro snapback cap in olive-brown from Nike SB is a simple yet classic baseball cap. This hat has a six panel crown and a flat brim like all great snapbacks. The Nike SB logo is embroidered in 3D on the front of the crown and a Nike SB flip tag is sewn next to the snaps at the back. <br><br>

     Hat Details:
     <ul>
   <li>  Made of 100% polyester </li>
   <li>  Nike SB logo embroidered in 3D on front </li>
   <li> Nike SB flip tag sewn at the back  </li>       
   </ul>

   <br><br>
     Hat Sizing Info: <br> <br>

     Adjustable - snapback allows most sizes to fit comfortably </p>

  
  <form method="POST" action="caps.php">

    How many watches
  <input type='number'  name="orderNum" value='1'>
  

<br><br>

Select Color: &nbsp;


  <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary ">
    <input type="radio" name="color" id="option1" autocomplete="off" value="color-Olive green " checked> Olive Green
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
        $orderName="Nike Sb Hat";
        $particulars=$_POST['color'];

        //sessions foe the order review
        $_SESSION['orderNum']=$orderNum;
        $_SESSION['orderName']=$orderName;
        $_SESSION['particulars']=$particulars;
        // picture of the item
        $_SESSION['itemPic']= "\"images/hatnb1.jpeg\"";
       
      
       if($_SESSION['loggedInStatus']==1)
     {
        

          echo "<script>location='reviewOrder.php'</script>";

       
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