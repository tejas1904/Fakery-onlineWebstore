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
      
  <img id="myImage" src="images/bagcb.jpg" style="width:80%" style="float: right;" style=""> 
  <br><br>


  
  <img src="images/bagcb.jpg" height="54" width="50" onclick="document.getElementById('myImage').src='images/bagcb.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; "> 
      
  <img src="images/bagcb1.jpg" height="54" width="50" onclick="document.getElementById('myImage').src='images/bagcb1.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; ">

  <img src="images/bagcb2.jpg" height="54" width="50" onclick="document.getElementById('myImage').src='images/bagcb2.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; ">

  <img src="images/bagcb3.jpg" height="54" width="50" onclick="document.getElementById('myImage').src='images/bagcb3.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; "> <br>


  
  
  
   </div>

 <div class='col-md-6'> 
  
   <p style="font-family:Bungee; font-size:38px">
       Hogan baul's Zavarick Backpack</p>
     
    <p> This versatile  backpack from hogan baul helps you carry all your necessities in comfortable style. This medium-size backpack includes features such as zip pocket and a zip closure.
Grey and black backpackNon-padded haul loop, padded shoulder straps1 main compartment with zip closure, has a slip pocketA zip pocket on the frontPadded back1 stash pocket on one side
  </p>

  
  <form method="POST" action="bags.php">

    How many Bags
  <input type='number'  name="orderNum" value='1'>
  

<br><br>

select size: &nbsp;


  <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary ">
    <input type="radio" name="color" id="option1" autocomplete="off" value="color-green " checked> Green
  </label>
  <label class="btn btn-secondary active">
    <input type="radio" name="color" id="option2" autocomplete="off" value="color-orange " > orange
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="color" id="option3" autocomplete="off" value="color-blue  "> blue
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
        $orderName="Zavarick Backpack";
        $particulars=$_POST['color'];

        //sessions foe the order review
        $_SESSION['orderNum']=$orderNum;
        $_SESSION['orderName']=$orderName;
        $_SESSION['particulars']=$particulars;
        // picture of the item
        $_SESSION['itemPic']= "\"images/bagcb.jpg\"";
       
      
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