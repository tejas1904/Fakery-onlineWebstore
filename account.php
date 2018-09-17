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
	<title>My account</title>

  <style type="text/css">
    
    body{
   
   font-family: calibri;
   color: rgb(255,255,255);
   background-image:url("shatter.jpg"); padding-left:56px;}


  </style>
</head>


<body>

<br><br>

 <button><a href='fakery.php'>GO BACK  </a> </button>

<button ><a href='logout.php'> logout </a>  </button><br><br>
  <?php
           $user=$_SESSION['userEmail'];

           

          $conn=mysqli_connect("localhost","root","","fakery");
        
          $sql="SELECT name FROM customers WHERE email='$user'; ";
        
          $result=mysqli_query($conn,$sql);

          $row=mysqli_fetch_array($result);

          echo'hello '.$row['name'].' you are sucessfully loggedd in <br><br>';


          
     
          echo '<p><b>Your Orders</b></p> <br>';

         

           $sqlA="SELECT * FROM orders 
            WHERE id=(SELECT id FROM customers WHERE email='$user') ORDER BY orderID DESC; ";
            $resultA=mysqli_query($conn,$sqlA);

           echo  '<table cellpadding="5" border="1px"  >';
        echo "<tr><th> orderID </th> <th> Item </th> <th> no of items </th>  <th> particulars </th></tr>";

      while($row1=mysqli_fetch_array($resultA))
     {
     echo "<tr><td >"
       .$row1['orderID']. 
       "</td><td>" 
       .$row1['orderName']. 
       "</td><td>" 
       .$row1['oredrNum'].
       "</td><td>"
       .$row1['particulars'].
       
      
       "</td></tr>";


  
 }
 echo  "</table>";
 ?>
    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>