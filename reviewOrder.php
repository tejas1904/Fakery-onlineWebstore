<?php 

session_start();

 ?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>

<style type="text/css">
	
 
body{ 
	 background-image: url("shatter.jpg");
	  color: rgb(255,255,255);
	}

</style>

	<title> Review your order </title>

     

</head>
<body>

	<br><br>
	<div class="container">
		<div class='row'>
			<div class='col'>
	
	<p><h1>you have ordered</h1></p>
            </div>
        </div>
	<div class="container">
		<div class='row'>
			<div class='col-9'>

	<table class="table ">
  <thead>
		<tr>
			<th> name of the product</th>
			<th>number of products</th>
			<th>particulars (if any)</th>
			<th>item image</th>
		</thead>
		</tr>

		<tr>
			<td><?php  echo 	$_SESSION['orderName'];  ?> </td>
			<td><?php  echo 	$_SESSION['orderNum'];  ?> </td>
			<td><?php  echo 	$_SESSION['particulars'];  ?> </td>
			<td><?php   	echo"<img src=" .$_SESSION['itemPic'] . "height='122' width='129'>";  ?> </td>
	</table>

</div>
</div> 
   
   <br>
 <div class='row'>
 	<div class='col'>
    <form method="POST" action="reviewOrder.php">
    	
    	<button type="submit" name='submit'  class="btn btn-success""> confirm order </button>  &nbsp; &nbsp; &nbsp;
    	<button type="submit" name='cancel'  class="btn btn-danger">cancel order </button> 

    </form>  
    </div>
    </div>
</div>

	
	<?php  

        
       
       if(isset($_POST['submit']))
       {
          
          $user=$_SESSION['userEmail'];

       	 $conn=mysqli_connect("localhost","root","","fakery");

       	$sql="INSERT INTO orders
	      (orderID,id,orderName,oredrNum,particulars)
	      VALUES
	      ('',(SELECT id FROM customers WHERE email='$user' ),'$_SESSION[orderName]','$_SESSION[orderNum]',
	      '$_SESSION[particulars]');";  

	      mysqli_query($conn,$sql);


           // just a message
	       
	       
	       //unsetting the sessions
            session_unset($_SESSION['orderName']); 
             session_unset($_SESSION['orderNum']); 
              session_unset($_SESSION['particulars']); 
               session_unset($_SESSION['itemPic']); 
               
               

               echo "<script>location='account.php'</script>";
       }

       if(isset($_POST['cancel']))
       {
       	 echo " <script>
                    alert('your order has been Sucessfully cancelled');  
                   </script>" ;

                 echo "<script>location='fakery.php'</script>";
       }
        
	?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>