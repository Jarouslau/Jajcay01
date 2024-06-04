<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 06</title>
</head>
<body>
    <h1>požiadavka 06</h1>
    <?php
    // Výpis všetkých objednávok zadaných 19. mája 1997
    $query = "SELECT * FROM Orders WHERE OrderDate = '1997-05-19'";
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
