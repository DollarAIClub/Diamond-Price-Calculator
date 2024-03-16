<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data
    $carat = $_POST['carat'];
    $cut = $_POST['cut'];
    $color = $_POST['color'];
    $clarity = $_POST['clarity'];
    
    // Base price and calculation
    $basePricePerCarat = 5000;
    $price = $carat * $basePricePerCarat * $cut * $color * $clarity;
    
    // Display the result
    echo "<h1>Calculated Diamond Price</h1>";
    echo "<p>The price for your diamond is: $" . number_format($price, 2) . "</p>";
}
?>