
<?php
       session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   your in page<br>
  <a href="account.php"> home </a>
  <a href="account2.php"> page</a>

   <br>
         <?php
          echo $_SESSION['userEmail'];

         ?>

</body>
</html>