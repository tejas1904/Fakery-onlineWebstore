<?php
        session_start();
        
        error_reporting(0);
      ?>


<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>faker</title>
<style>
body {
 
}

 
.productPics {
    
     text-align:center;font-family:Arial; ;font-size:22px;
    
}

.productNames
{ 
     text-align:center;font-family:Arial; ;font-size:22px;
    
}

#logoPic {padding-top: 25px;}

#links{ font-size:30px;font-family:calibri;padding-top:56px;text-align: right}
#links a{color:rgb(220,220,220); text-decoration:none;}
#links a:visited{color:rgb(220,220,220);}
#links a:hover{color:rgb(242, 62, 62);}

#accountButton a:{color:rgb(255,255,255); text-decoration:none;}
#accountButton a:visited{color:rgb(255,255,255);}
#accountButton a:hover{color:rgb(255,255,255);}

#account {   text-align:right; font-size:20px;}



#Quote
{ font-family:Segoe Print; font-size:40px; text-align:center; color:rgb(0,0,0);}

body{ background-image: url("shatter.jpg"); background-repeat: repeat-x; background-size:417px 149px  }


</style>
</head>

<body>
<div class='container'>

<div class='row' >

  <div class='col' id='logoPic'>
    <a href='fakery.php'>
    <img src="logo.png" height="109" width="286" class="img-responsive" >
    </a>
</div>

<div class='col'>
<div class="header">
<div class="link" id="links">
 <a href="login.php"> &nbsp;login &nbsp;&nbsp;</a>
 <a href="signUp.php"> &nbsp;Sign Up &nbsp;</a>
 <a href="products.php"> &nbsp;Products &nbsp;</a>
 <a href="About.php"> &nbsp;About &nbsp;</a>
</div> 
</div>  
</div>
</div>

<div class='row' >

  <div class='col' id='account'>

   <br>
   
 <?php 
    
   if($_SESSION['loggedInStatus']==1)
     { echo "logged in as "; echo $_SESSION['userName'] ;
        echo " &nbsp; &nbsp; <a class='btn btn-secondary btn-sm' id='accountButton' href='account.php'>
               My Account </a> ";
        echo " &nbsp;  <a class='btn btn-secondary btn-sm' id='accountButton' href='logout.php'>
               logout </a> ";}
    else
      { echo " you are not logged in";
     echo " &nbsp; &nbsp; <a class='btn btn-danger btn-sm' id='accountButton' href='login.php'> login now
               </a>  ";}

  ?>  


</div>
</div>

<div class='row'>
<div class='col'>
<b> <p class="text-center" id="Quote">"One  stop for all fake products"</p></b></br></br>
</div>
</div>


<div class='row'>
  <div class='col'>
<div class="productPics">
<a href="shirt.php"> <img src="shirt.png" height="150" width="128" > </a> <br><br>
</div>
</div>

<div class='col'>
<div class="productPics">
<a href="sunglasses.php"> <img src="sunglass.png" height="128" width="128" > </a>
</div>
</div>

<div class='col'>
<div class="productPics">
<a href="watch.php"> <img src="watch.png" height="150" width="128" >  </a>
</div>
</div>

</div>

<div class='row'>
  <div class='col'>
<div class="productPics">
<a href="bags.php"> <img src="bag.png" height="150" width="128" > </a> 
</div>
</div>

<div class='col'>
<div class="productPics">
<a href="caps.php"> <img src="cap.png" height="128" width="128" > </a>
</div>
</div>

<div class='col'>
<div class="productPics">
<a href="jewlery.php"> <img src="jewlery.png" height="150" width="128" >  </a>
</div>
</div>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
