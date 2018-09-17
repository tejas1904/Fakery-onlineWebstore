<?php
session_start();
session_destroy();
header('Location: fakery.php');
exit;


?>