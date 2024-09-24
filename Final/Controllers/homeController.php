<?php
session_start();
require_once('../Models/alldb.php');


if(isset($_POST['add']))
{

    $id = 1;
    $product=$_POST['product_name'];
    $buy_price=$_POST['buy_price'];
    $sell_price=$_POST['sell_price'];
    $quantity=$_POST['sell_quantity'];
    $a = $_POST['available_quantity'];

    if (empty($product) || empty($buy_price) || empty($sell_price) || empty($quantity) || empty($a))
        $_SESSION['error']="Please fill up the form";
    

    else
        $status=add($product,$buy_price,$sell_price,$quantiy, $a);

    header("location:../Views/home.php?id=$id");
    
}

?>
