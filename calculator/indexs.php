<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<form action="" method="post">
    <label>Number 1:</label><br>
    <input type="number" name="num1" required><br><br>
    <label>Number 2:</label><br>
    <input type="number" name="num2" required><br><br>
    <label>Operation:</label>
    
    <button type="submit" value="+" name="operation">+</button>
    <button type="submit" value="-" name="operation">-</button>
    <button type="submit" value="*" name="operation">*</button>
    <button type="submit" value="/" name="operation">/</button>

<?php
if (isset($_POST["num1"], $_POST["num2"], $_POST["operation"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];
    $result = null;

    switch ($operation) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero is not possible";
            }
            break;
        default:
            $result = "Invalid operation";
            break;
    }
    echo "<p>Result: $result</p>";
}
?>

</body>
</html>
