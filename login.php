<?php
        session_start();
?>
<html>
<head><title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
body{ text-align: center;
	 vertical-align: 100;
	 font-family: calibri;
	 color: rgb(255,255,255);
	 background-image:url("shatter.jpg")}

#links{ font-size:30px;font-family:calibri;text-align:right;padding-top:55px; padding-right:149px; }
#links a{color:rgb(220,220,220); text-decoration:none;}
#links a:visited{color:rgb(220,220,220);}
#links a:hover{color:rgb(242, 62, 62);}

 #link a{color:rgb(150,150,150); text-decoration:none;}
 #link a:visited{color:rgb(150,150,150);}
  #link a:hover{color:rgb(200,200,200);}

</style>
<title></title>
</head>

<body >
<p id="links">

 <a href="fakery.php"> &nbsp;GO BACK &nbsp;&nbsp;</a>
</p>
	

	<img src="Lock.png" height="220" width="220"><br>
	
	<form  method="POST" action="login.php">

		Email Id:<br>
		<input type='text' placeholder="Email-id" name='email'> <br><br>

		Password:<br>
		<input type='password' placeholder="password" name='password'> <br><br>

		<button type='submit' name="submit"> SUBMIT</button>
	</form>


  <p id="link">new user?<a href="signUp.php" > create an account now! </a></p>

<?php


          if(isset($_POST['submit']))
          {

           

	    $conn=mysqli_connect("localhost","root","","fakery");
        
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="SELECT * FROM customers WHERE email='$email'; ";
        
        $result=mysqli_query($conn,$sql);

        $row=mysqli_fetch_array($result);

       //checking the entered passworsd to stored database password
       if(!empty($password))
         {
         	if($password == $row["password"])
          {	 echo "sucess"; 
             $_SESSION['userEmail']=$row['email']; 

              $_SESSION['userName']=$row['name'];

              $_SESSION['loggedInStatus']=1;
             header('location:http://localhost/Fakery/account.php'); } 
         
         else 
           {echo '<p style="color: red;font-size: 20Px;"> records do not match ! TRY AGAIN"</p>';}  
          }
       else
       	echo "enter something";
          
    }
	    ?>
        
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>