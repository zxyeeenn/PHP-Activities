<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die('Invalid request method.');
        }
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        
        echo "Hello <b>" . $first_name . " " . $last_name . "</b><br>";
        echo "Your email address is <b>" . $email . "</b><br>";
        
        $password_length = strlen($password);
        echo "Password Length: " . $password_length . "<br>";
        
        if ($password == $confirm_password) {
            echo "Your password matched!...";
        } else {
            die('Your password do not match.');
        }
    ?>
</body>
</html>