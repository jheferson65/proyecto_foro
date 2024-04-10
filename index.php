<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Project</title>

    <link rel="stylesheet" src="./css/styles.css">
</head>

<body>

    <form action="index.php" method="post">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required><br>

        <label for="product_code">Product Code:</label>
        <input type="text" id="product_code" name="product_code" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br>

        <label for="available_quantity">Available Quantity:</label>
        <input type="number" id="available_quantity" name="available_quantity" required><br>

        <label for="unit_price">Unit Price:</label>
        <input type="number" id="unit_price" name="unit_price" step="0.01" required><br>

        <label for="supplier">Supplier:</label>
        <input type="text" id="supplier" name="supplier" required><br>

        <label for="last_reposition date">Last Reposition Date:</label>
        <input type="date" id="last_reposition_date" name="last_reposition_date" required><br>

        <input type="submit" value="Save Product">
    </form>

    <script>
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "inventory";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $product_name = $_POST['product_name'];
        $product_code = $_POST['product_code'];
        $description = $_POST['description'];
        $quantity_available = $_POST['quantity_available'];
        $unit_price = $_POST['unit_price'];
        $provider = $_POST['provider'];
        $last_reposition_date = $_POST['last_reposition_date'];

        $sql = "ALGUIEN Q L HAGA OK?";

        if ($conn->query($sql) === TRUE) {
            echo "Product saved successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

        ?>
    </script>
</body>

</html>