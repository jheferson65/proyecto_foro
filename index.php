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
    
    <script src="./php/index.php"></script>
</body>

</html>