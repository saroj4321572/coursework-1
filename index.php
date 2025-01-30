<?php
require('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
<form action="product.php" method="post">    
    <h1>Product detail</h1>
        <p>Product Name: <input type="text" name="pname" /></p>
        <p>Product Price: <input type="text" name="pprice" /></p>
        <p>Product Description: <input type="text" name="pdesc" /></p>
        <p>Product Quantity: <input type="text" name="pquantity" /></p>
        <p><input type="Submit" /></p>
</form>

<?php
$q = "select * from product";
$result = $conn->query($q);
?>

<?php
while($data = $result->fetch_assoc()){
?>
    <div class = "product">
        <p>ID : <?php echo $data['id']; ?></p>
        <p>Product : <?php echo $data['pname']; ?></p>
        <p>Price : <?php echo $data['pprice']; ?></p>
        <p>Description : <?php echo $data['pdesc']; ?></p>
        <p><a href ="delete.php?usrid=<?php echo $data['id']?>">Delete</a></p>
        <p><a href ="update.php?usrid=<?php echo $data['id']?>">Delete</a></p>

    </div>
<?php
}
?>
</body>
</html>