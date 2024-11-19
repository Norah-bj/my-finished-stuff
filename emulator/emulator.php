<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Emulator</title>
</head>
<body>

<h1>Number Emulator</h1>
<form action="" method="post">
    <label for="number">Enter a Number:</label><br>
    <input type="number" id="number" name="number" required><br><br>
    <input type="submit" value="Check">
</form>

<?php
if (isset($_POST["number"])) {
    $number = $_POST["number"];
    echo "<h2>You entered: $number</h2>";

    switch (true) {
        case ($number > 0):
            $positivity = "positive";
            break;
        case ($number < 0):
            $positivity = "negative";
            break;
        default:
            $positivity = "zero";
        }

    switch ($number % 2) {
        case 0:
            $parity = "even";
            break;
        default:
            $parity = "odd";
    }

    echo "The number is $positivity and $parity.";
}
?>

</body>
</html>
