<!DOCTYPE html>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <center>
        <?php

if(isset($_POST["sub"]))
{
    $a=$_POST["num1"];
    $b=$_POST["num2"];
    $c=$_POST["num3"];
    
        if ($a>$b && $a>$c)
        {
            echo "max number is A"."<br>";
        }
        elseif($b>$c && $b>$a)
        {
            echo "max number is B"."<br>";
        }
        elseif($c>$a && $c>$b)
        {
            echo "max number is C";
        }
        else
        {
            echo "wrong try again";
        }
    
}

?>
        <form method="post">
           A &nbsp <input type="number" name="num1" placeholder="enter your number*" required><br><br>
           B &nbsp <input type="number" name="num2" placeholder="enter your number*" required><br><br>
           C &nbsp<input type="number" name="num3" placeholder="enter your number*" required><br><br>
            <input type="submit" name="sub" value="submit">
</form>
    </center>
    
</body>
</html>