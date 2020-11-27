<?php
require('connect1.php');
    if(isset($_POST['ID'])){
        $num = $_POST['Name'];
        $numa = $_POST['Height'];
        $numb = $_POST['Weight'];
        $numc = $numb / ($numa**2);

        $sql = "INSERT INTO labitf (Name, Height, Weight, BMI) value ('$num','$numa', '$numb', '$numc')";

        if(mysqli_query($conn, $sql)){
            echo "New data insert successfully";
            echo "<a href='index1.php'>back to home page</a>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert1.php" method="post">
        <h1>Product</h1>
        <input type="text" name="Product">
        <h1>Price</h1>
        <input type="text" name="Price">
        <h1>Amount</h1>
        <input type="text" name="Amount">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>