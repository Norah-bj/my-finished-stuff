<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form action="" method="post"> <!-- Use action="" for same-page submission -->
        <label>Enter first number:</label>
        <input type="number" name="num1" id="num1" required><br><br>
        
        <label>Enter second number:</label>
        <input type="number" name="num2" id="num2" required><br><br>
        
        <label>Select Operation:</label>
        <select name="operation" id="operation">
            <option value="+">+</option>
            <option value="*">*</option>
        </select><br><br>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST["num1"], $_POST["num2"], $_POST["operation"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = null;

        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            default:
                echo "<p>Invalid operation</p>";
                exit; // Stop further execution for invalid operations
        }
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
