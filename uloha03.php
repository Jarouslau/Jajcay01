<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 03</title>
</head>
<body>
    <h1>požiadavka 03</h1>
    <?php
    // Výpis všetkých objednávok podľa dátumu
    $query = "SELECT * FROM Orders ORDER BY OrderDate";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<pre>";
            print_r($row);
            echo "</pre>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>
