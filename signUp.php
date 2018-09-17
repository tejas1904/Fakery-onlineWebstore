<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title> signup</title></head>

	<style type="text/css">
		
		body{
			background-image: url("shatter.jpg");
			color: rgb(255,255,255);

		}
		.heading{ font-family:Harlow Solid;color:rgb(15,141,90);font-size:50px;text-align:center;padding:5px;}
	 #links{ font-size:30px;font-family:calibri;text-align:right; padding-top: 55px;}
#links a{color:rgb(220,220,220); text-decoration:none;}
#links a:visited{color:rgb(220,220,220);}
#links a:hover{color:rgb(242, 62, 62);}
#logo {padding-top: -55px;}

#error={color: : 'orange';}

	</style>


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
	
<div class='row' >
  <div class='col'>
 <span class='heading'>Create your new account </span> <br>
</div>

</div>

	<div class='row'>
		<div class='col'>
<form action="signUp.php" method="POST">
NAME: &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
<input type="text" name="name"><br><br>

PH Number:
<input type="text" name="phNumber"><br><br>

E-Mail: &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
<input type="text" name="email"><br><br>


<p>Enter Your Adress:</p>
&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<textarea rows="3" cols="40" name="adress"> adress</textarea><br><br>

Pincode &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
<input type="number" name="pincode" value="560001"><br><br>

password:&nbsp; &nbsp;&nbsp;&nbsp; 
<input type="password" name="password" ><br><br>



	<button type="submit" name='submit'> SUBMIT </button>&nbsp; &nbsp;&nbsp;
	<button type="RESET" name='reset'> RESET</button>    &nbsp; &nbsp;&nbsp;
	 <button >	 <a href='Fakery.php'>GO BACK </a> </button><br><br>

</form>
</div>

<div class='col'>
<?php
     if(isset($_POST['submit']))
     {

	      $conn=mysqli_connect("localhost","root","","fakery");

          
          
	      $name=$_POST['name'];
	      $phNumber=$_POST['phNumber'];
	      $email=$_POST['email'];
	      $adress=$_POST['adress'];
	      $pincode=$_POST['pincode'];
	      $password=$_POST['password'];


	      $sql="SELECT COUNT(*) FROM customers WHERE email='$email'; ";
        
          $result=mysqli_query($conn,$sql);

          $row=mysqli_fetch_array($result);


           if($row['COUNT(*)']==0)
           {

	      $sql="INSERT INTO customers
	      (name,phNum,email,adress,pincode,password)
	      VALUES
	      ('$name','$phNumber','$email','$adress','$pincode','$password');";         

	      mysqli_query($conn,$sql);
	       }

	      if($row['COUNT(*)']!=0)
	       	echo "<p id='error'> THE entered Email already exists please use a different one </p> !!";

     }
	?>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>