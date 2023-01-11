<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Project 2</title>
</head>

<!--// 
// отримує через ГЕТ параметри мінімальне та максимальне значення, 
// та виводить у форматі JSON масив квадратів цілих чисел із заданого діапазону включно.
-->

<form action="Project2.php" method="get">
    <p>Enter min number: <input type ="number" name="min"></p>
    <p>Enter max number: <input type ="number" name="max"></p>
    <p><input type="submit"</p>
</form>

<body>
<?php
 
if (isset($_GET["min"]) && isset($_GET["max"])) {
    $minNum = $_GET["min"]; 
    $maxNum = $_GET["max"];
        
        echo "The minimum number in the array: $minNum" . '<br/>';
        
        echo "The largest number in the array: $maxNum". '<br/>';
        echo '<br>';
        $numbers = [];
        
        for ($i = $minNum; $i <= $maxNum; $i++) {
            array_push($numbers, $i * $i);
        }
        echo "An array of squares of integers from the given range: " . json_encode($numbers);
    }
?>
</body> 
</html>