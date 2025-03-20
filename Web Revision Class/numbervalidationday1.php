<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Validation</title>
</head>
<body>
    Enter a number: <input type="number" name="num" id="num">
    <br>
    <input type="submit" value="Check" name="submit" >

</body>
</html>

<?php

if (isset($_POST['login'])) {
    $number1 = $_POST['num'];
    $pattern = '/^[0-9]+$/';
    if(preg_match($pattern,$num))
    {
        echo "The number is Valid"
    }
    else
    {

        echo "The number is not valid";
    }


}

?>

