<?php
require_once('../Models/alldb.php');
if(empty($_SESSION['id']))
{
   header("location:../Views/login.php");
}
$res=data1();

?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Seller</title>
</head>
<body>
      <h1>Add Product</h1>
      <fieldset>
      <form action="../Controllers/homeController.php" method="post">
        Product Name:
        <input type="text" name="product_name"><br><br>

        Buy Price:
        <input type="number" name="buy_price" ><br><br>

        Sell Price:
        <input type="number" name="sell_price"><br><br>

        Sell Quantity:
        <input type="number" name="sell_quantity"><br><br>

        Available Quantity:
        <input type="number" name="available_quantity"><br><br>

        <input type="submit" name="add" value="Add"><br><br><br>
        
      <?php
       if(isset( $_SESSION['error'])) 
       {
         echo $_SESSION['error']; 
         unset($_SESSION['error']);
       }
       ?>

    </form>
    </fieldset>

    <br><br>
    <table border="1">
    <tr>
      <th>Product Name</th>
        <th>Profit</th>
    </tr>
      <?php while($r=$res->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $r['product'] ?></td>
        <td><?php echo ($r['sell_price'] - $r['buy_price']) ?></td>

    </tr>
     <?php } ?>
</table>


</body>
</html>