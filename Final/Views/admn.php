<?php
require_once('../Models/alldb.php');
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

    <table border="1">
    <tr>
      <th>Product Name</th>
        <th>Platform fee</th>
    </tr>
<?php while($r=$res->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $r['product'] ?></td>
        <td><?php echo ((2 * $r['profit']) / 100) ?></td>

    </tr>
     <?php } ?>
</table>

</body>
</html>