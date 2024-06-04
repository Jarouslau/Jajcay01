<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 04</title>
</head>
<body>
    <h1>požiadavka 04</h1>
    <?php
    // Výpis počtu všetkých objednávok uskutočnených v roku 1997
    $query = "SELECT COUNT(*) AS total FROM Orders WHERE YEAR(OrderDate) = 1997";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Total Orders in 1997: " . $row['total'];
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>
