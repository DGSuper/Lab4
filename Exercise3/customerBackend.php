<html>
    <head>
        <title>Info</title>
        <link rel="stylesheet" href="style.css">
        <script src="formChecker.js"></script>
    </head>
    <body>
        <div id="container">
            <h1>Your order has been completed!</h1><br>
            <h2>Below is your order information:</h2>

            <?php
                $usern = $_POST["User"];
                $passw = $_POST["Pass"];
                $firstart  = $_POST["mil"];
                $secondart = $_POST["twomil"];
                $thirdart  = $_POST["fivehun"];
                $fourthart = $_POST["tenmil"];
                $fifthart  = $_POST["fivemil"];
                $sixthart  = $_POST["onehun"];
                $first  = $firstart * 1000000;
                $second = $secondart * 2000000;
                $third  = $thirdart * 500000;
                $fourth = $fourthart * 10000000;
                $fifth  = $fifthart * 5000000;
                $sixth = $sixthart * 100000;
                $shipping = $_POST["shipping"];
                $finalAmount = '&#36;'.($first + $second + $third + $fourth + $fifth + $sixth + $shipping);
                $shippingType = "";
                if($shipping == 0) $shippingType = "Free 7-Day Shipping";
                else if($shipping == 5) $shippingType = "Three-Day Shipping";
                else if($shipping == 50) $shippingType = "Overnight Shipping";
                else $shippingType = "Dog we got a problem";
                $first  = '&#36;'.$first;
                $second = '&#36;'.$second;
                $third  = '&#36;'.$third;
                $fourth = '&#36;'.$fourth;
                $fifth  = '&#36;'.$fifth;
                $sixth  = '&#36;'.$sixth;
                $shipping    = '&#36;'.$shipping;

                echo "<h4>Username: {$usern}</h4><h4>Password: {$passw}</h4>";
                echo "<br><br><br>";
                echo "<h2>This is what you ordered:</h2>";
                //Prepare for some ugly ass code...
                echo "<table>";
                echo    "<tr><td class=\"g\"></td><td class=\"g\"><b>Quantity</b></td><td class=\"g\"><b>Cost Per Item</b></td><td class=\"g\"><b>Sub Total</b></td></tr>";
                echo    "<tr><td class=\"g\"><b>Piece 1</b></td><td class=\"b\">{$firstart}</td><td class=\"b\">$1,000,000.00</td><td class=\"b\">{$first}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Piece 2</b></td><td class=\"b\">{$secondart}</td><td class=\"b\">$2,000,000.00</td><td class=\"b\">{$second}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Piece 3</b></td><td class=\"b\">{$thirdart}</td><td class=\"b\">$500,000.00</td><td class=\"b\">{$third}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Piece 4</b></td><td class=\"b\">{$fourthart}</td><td class=\"b\">$10,000,000.00</td><td class=\"b\">{$fourth}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Piece 5</b></td><td class=\"b\">{$fifthart}</td><td class=\"b\">$5,000,000.00</td><td class=\"b\">{$fifth}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Piece 6</b></td><td class=\"b\">{$sixthart}</td><td class=\"b\">$100,000.00</td><td class=\"b\">{$sixth}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Shipping</b></td><td colspan=\"2\"  class=\"b\">{$shippingType}</td><td class=\"b\">{$shipping}.00</td></tr>";
                echo    "<tr><td colspan=\"3\" class=\"g\"><b>Total Cost</b></td><td class=\"g\"><b>{$finalAmount}.00</b></td></tr>";
                echo "</table>";
            ?>
        </div>
    </body>
</html>
