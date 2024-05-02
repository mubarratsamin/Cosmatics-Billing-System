<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetic Store</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #800000, #660000); /* Maroon gradient */
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
        <h1>Welcome to the Cosmetic Store</h1>
        <a href="input_page.php" id="buyButton">Buy Products</a>
    </div>

</body>
</html>
