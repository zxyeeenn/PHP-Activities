<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <?php
            //Multiplier
            $num = 5;

            //Display
            echo "<h1>Multiplication Table of .$num.<br></h2>";
            for($x = 0; $x <= 10; $x++){

                $z = $num * $x; 
                echo "$num * $x = $z";
                echo '<br>';
        }
        ?>
    </center>
</body>
</html>
