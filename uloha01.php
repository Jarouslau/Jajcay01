<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 01</title>
</head>
<body>
    <h1>požiadavka 01</h1>
    <?php
    // Výpis všetkých stĺpcov z tabuliek Zákazníci, Objednávky a Dodávatelia
    $query = "SELECT * FROM Customers";
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

    echo "<h1>požiadavka 02</h1>";
    $query = "SELECT * FROM Customers ORDER BY Country, CustomerName";
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

    echo "<h1>požiadavka 03</h1>";
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

    echo "<h1>požiadavka 04</h1>";
    $query = "SELECT COUNT(*) AS total FROM Orders WHERE YEAR(OrderDate) = 1997";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Total Orders in 1997: " . $row['total'];
    } else {
        echo "0 results";
    }

    echo "<h1>požiadavka 05</h1>";
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

    echo "<h1>požiadavka 06</h1>";
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
