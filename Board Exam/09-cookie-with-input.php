<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="user" id="">
        <br>
        <button name="button" value="set">Set Cookies</button>
        <br>
        <button name="button" value="display">Display Cookies</button>
        <br>
        <button name="button" value="delete">Delete Cookies</button>
    </form>

    <?php
    if(isset($_POST['button'])) {
        // Set Cookie
        if($_POST['button'] == "set") {
            $val = $_POST['user'];
            setcookie("user", $val, time() + 86400); // 86400 seconds = 1 day
            echo "Cookie is set";
        }

        // Display Cookie
        if($_POST['button'] == "display") {
            if(isset($_COOKIE['user'])) {
                echo "Cookie Value: " . $_COOKIE['user'];
            } else {
                echo "No cookie set";
            }
        }

        // Delete Cookie
        if($_POST['button'] == "delete") {
            if(isset($_COOKIE['user'])) {
                setcookie("user", "", time() - 3600); // setting the expiration time in the past deletes the cookie
                echo "Cookie deleted";
            } else {
                echo "No cookie to delete";
            }
        }
    }
    ?>
</body>
</html>
