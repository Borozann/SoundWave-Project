<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .product-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
        }

        .product-details {
            padding: 20px;
        }

        .product-details h1 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .product-details p {
            color: #666;
            font-size: 1em;
        }
    </style>
</head>
<body>

<?php
// Check if product ID is provided in the URL
if (isset($_GET['id'])) {
    // Assuming you have $conn in another file
    include "connection_bd.php";

    $product_id = $_GET['id'];

    // Fetch product details from the database using $product_id
    $product_query = "SELECT * FROM products WHERE ID_PRODUCT = $product_id";
    $result = $conn->query($product_query);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();

        // Display product details
        echo '<div class="product-container">';
        echo '<img class="product-image" src="' . $product['IMAGE'] . '" alt="' . $product['NAME'] . '">';
        echo '<div class="product-details">';
        echo '<h1>' . $product['NAME'] . '</h1>';
        echo '<p>' . $product['DESCRIPTION'] . '</p>';
        echo '<p>$' . $product['PRICE'] . '</p>';
        
        // Display stock information
        if ($product['STOCK'] > 0) {
            echo "<p>In Stock</p>";
        } else {
            echo "<p>Out of Stock</p>";
        }

        echo '</div>';
        echo '</div>';
    } else {
        echo 'Product not found.';
    }
} else {
    echo 'Product ID not provided.';
}
?>

</body>
</html>
