<?php require('database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id11 = $_GET['usrid'];
    $q = "SELECT * from product where id = '$id11'";
    $result = $conn->query($q);
    $data = $result->fetch_assoc();
    ?>
    <form>
       <p>Product name: <input type="text" value = "<?php echo $data ['pname']; ?>"/></p> 
       <p>Product Price: <input type="text" value = "<?php echo $data ['pprice']; ?>" /></p> 
       <p>Product Quantity: <input type="text" value = "<?php echo $data ['pquantity']; ?>" /></p> 
       <p>Product Description: <input type="text" value = "<?php echo $data ['pdesc']; ?>" /></p> 
       <p><input type="Submit" /></p>
    </form>
</body>
</html>