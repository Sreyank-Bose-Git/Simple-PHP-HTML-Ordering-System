<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MAKE ORDER</h1>
    <form action="index.php" method="post">
        <label for="Order">Your Order:</label>
        <select name="Order" id="Order">
            <option value="Select Your Product">Select Your Product</option>
            <option value="Pizza">Pizza (179 /-)</option>
            <option value="Vada Pav">Vada Pav (17 /-)</option>
            <option value="Samosa">Samosa (19 /-)</option>
        </select>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min=1 max=20 value="1">
        <br>
        <input type="submit" value="Order">
        <br>
    </form>
</body>
</html>
<?php
    $pizza = 179;
    $vadaPav = 17;
    $Samosa = 19;
    $totalPrice = null;

    echo "You Ordered {$_POST["quantity"]} {$_POST["Order"]}(s) <br>";
    if($_POST["Order"] == "Pizza") {
        $totalPrice = $pizza * $_POST["quantity"];
        echo "Total Price: {$totalPrice} /-";
    }
    elseif($_POST["Order"] == "Vada Pav") {
        $totalPrice = $vadaPav * $_POST["quantity"];
        echo "Total Price: {$totalPrice} /-";
    }
    elseif($_POST["Order"] == "Samosa") {
        $totalPrice = $Samosa * $_POST["quantity"];
        echo "Total Price: {$totalPrice} /-";
    }
    else {
        echo"Incorrect Order Selected!";
    }
?>