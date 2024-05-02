<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloom & Blush - Summary</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #800000, #8B0000); /* Maroon gradient */
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #container {
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        #summary {
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div id="container">
        <h1>Order Summary - Bloom & Blush</h1>

        <?php
        // PHP code to handle form submission and display summary
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $customerName = isset($_GET['customerName']) ? $_GET['customerName'] : '';
            $phoneNo = isset($_GET['phoneNo']) ? $_GET['phoneNo'] : '';
            
            // Display customer name and phone number
            echo "<div id='summary'>Customer Name: $customerName</div>";
            echo "<div id='summary'>Phone No.: $phoneNo</div>";
            
            // Display products and total
            echo "<div id='summary'>Products:</div>";
            
            $productNames = $_GET['productName'];
            $quantities = $_GET['quantity'];
            $prices = $_GET['price'];
            
            for ($i = 0; $i < count($productNames); $i++) {
                echo "<div id='summary'>Product Name: {$productNames[$i]}</div>";
                echo "<div id='summary'>Quantity: {$quantities[$i]}</div>";
                echo "<div id='summary'>Price: ৳{$prices[$i]}</div>";
                echo "<hr>"; // Add a line to separate products
            }
            
            $total = array_sum(array_map(function ($quantity, $price) {
                return $quantity * $price;
            }, $quantities, $prices));
            
            echo "<div id='summary'>Total Amount: ৳" . number_format($total, 2) . "</div>";
        } else {
            echo "<div id='summary'>No data submitted</div>";
        }
        ?>
    </div>

</body>
</html>
