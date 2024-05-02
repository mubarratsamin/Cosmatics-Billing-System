<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloom & Blush - Input Page</title>
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

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        label {
            margin-bottom: 5px;
            color: #fff;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #fff;
            border-radius: 5px;
        }

        #buyButton {
            background-color: #fff;
            color: #800000; /* Maroon color */
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none;
        }

        #buyButton:hover {
            background-color: #800000; /* Maroon color on hover */
            color: #fff;
        }
    </style>
</head>
<body>

    <div id="container">
        <h1>Welcome to Bloom & Blush</h1>
        <form action="rec.php" method="get">

            <label for="customerName">Name:</label>
            <input type="text" id="customerName" name="customerName" required>

            <label for="phoneNo">Phone No.:</label>
            <input type="tel" id="phoneNo" name="phoneNo" required>

            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName[]" required>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity[]" required>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price[]" step="0.01" required>

            <button id="buyButton" type="submit">Buy Products</button>
        </form>
    </div>

</body>
</html>
