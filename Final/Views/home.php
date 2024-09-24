<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:../Views/login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Home</title>
   <link rel="stylesheet" href="admin.css">
</head>
<body>
   <?php
      if($_GET['id'] == 1)
         include 'seller.php';
      else
         include 'admn.php';

   ?>
</body>
</html>