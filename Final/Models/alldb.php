<?php
require_once('db.php');
function auth($id,$pass)
{
	$con=con();
	$sql="select * from login where ID='$id' and Pass='$pass'";
	$res=mysqli_query($con,$sql);
	return $res;
}

function data1()
{
	$con=con();
	$sql="select * from seller";
	$res=mysqli_query($con,$sql);
	return $res;
}

function add($product,$buy_price,$sell_price,$quantity, $a)
{
	$profit = $sell_price - $buy_price;
	$con=con();
	$sql="Insert into seller(product, buy_price, sell_price, sell_quantity, available, profit) values ('$product','$buy_price','$sell_price','$quantity', $a, $profit)";
	$res=mysqli_query($con,$sql);
	return $res;
}
?>