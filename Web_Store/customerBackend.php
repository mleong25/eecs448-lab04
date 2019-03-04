<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Snacks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="formChecker.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
</head>
<body>
    <h2>Receipt: </h2>
<?php
    $shipping = $_GET['shipping'];
    $snack = $_GET['snack'];
    $candy = $_GET['candy'];
    $drink = $_GET['drink'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    $snackTotal = $snack * 2.00;
    $candyTotal = $candy * 1.00;
    $drinkTotal = $drink * 3.00;
    $total = 0;
    $shippingTotal = 0;

    if($shipping == "Free 7 day") {
        $shippingTotal = 0.00;
    } else if ($shipping == "$5.00 three day") {
        $shippingTotal = 5.00;
    } else if ($shipping == "$50.00 over night") {
        $shippingTotal = 50.00;
    }

    echo '<p>Hello ' .$email. '</p>';
    echo '<p>Password:</p>' .$password;
    echo '<br><table border=\"1\">';
        echo '<tr>';
            echo '<th/></th><th>Quantity</th><th>Cost Per Item</th><th>Subtotal</th>';
        echo '</tr>';
        echo'<tr class="receipt">';
            echo '<td>Snack</td>';
            echo '<td>' .$snack. '</td><td>$2.00</td><td>$' .$snackTotal. '.00</td>';
        echo '</tr>';
        echo'<tr class="receipt">';
            echo '<td>Candy</td>';
            echo '<td>' .$candy. '</td><td>$1.00</td><td>$' .$candyTotal. '.00</td>';
        echo '</tr>';
        echo'<tr class="receipt">';
            echo '<td>Drink</td>';
            echo '<td>' .$drink. '</td><td>$3.00</td><td>$' .$drinkTotal. '.00</td>';
        echo '</tr>';
        echo'<tr class="receipt">';
            echo '<td>Shipping</td>';
            echo '<td>' .$shipping. '</td><td>$' .$shippingTotal. '.00</td>';
        echo '</tr>';
        echo'<tr class="receipt">';
            echo '<td>Total</td>';
            $total = $snackTotal + $candyTotal + $drinkTotal + $shippingTotal;
            echo '<td>$' .$total. '.00</td>';
        echo '</tr>';
    echo"</table>";
?>
</body>
</html>