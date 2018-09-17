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

.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.2); 
     transition: transform .2s;
}


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
      
  <img id="myImage" src="images/Wfbr.jpg" style="width:60%" style="float: right;" style="" class="zoom"> 
  <br><br>

  
  <img src="images/Wfbr.jpg" height="64" width="50" onclick="document.getElementById('myImage').src='images/Wfbr.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; "> 
      
  <img src="images/Wfbr1.jpg" height="64" width="50" onclick="document.getElementById('myImage').src='images/Wfbr1.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; ">

  <img src="images/Wfbr2.jpg" height="64" width="50" onclick="document.getElementById('myImage').src='images/Wfbr2.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; ">

  <img src="images/Wfbr3.jpg" height="64" width="50" onclick="document.getElementById('myImage').src='images/Wfbr3.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; "> 

    <img src="images/Wfbr4.jpg" height="64" width="50" onclick="document.getElementById('myImage').src='images/Wfbr4.jpg'"
  style="border: 1px solid #606060; padding:3px ; border-radius: 4px; "> <br>



  
  
  
   </div>

 <div class='col-md-6'> 
  
   <p style="font-family:Bungee; font-size:38px">
       Fossil's Fully Fossilzed Watch</p>
     
    <p> Lend your overall visual appeal a dash of class with this tan analog watch by Fossil for men. Made from leather and stainless steel, this watch will stand the test of time for years. Featuring a trendy round dial, this watch will surely get you compliments everywhere you go and offers a 2-year warranty. Pair this watch with any casual or formal attire to give yourself a complete classy look. </p>

  
  <form method="POST" action="watch.php">

    How many watches
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
        $orderName="Fosillized Watch";
        $particulars=$_POST['color'];

        //sessions foe the order review
        $_SESSION['orderNum']=$orderNum;
        $_SESSION['orderName']=$orderName;
        $_SESSION['particulars']=$particulars;
        // picture of the item
        $_SESSION['itemPic']= "\"images/Wfbr.jpg\"";
       
      
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