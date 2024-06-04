<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 05</title>
</head>
<body>
    <h1>požiadavka 05</h1>
    <?php
    // Výpis mien všetkých kontaktných osôb, kde je osoba manažérom, v abecednom poradí
    $query = "SELECT ContactName FROM Employees WHERE Title LIKE '%Manager%' ORDER BY ContactName";
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
