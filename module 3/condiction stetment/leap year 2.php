<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <center>
 <?php

if(isset($_POST["sub"]))
{
    $y=$_POST["year"];
    if($y%4==0)
    {
        echo "This is a leap year:".$y;
    }
    else
    {
        echo "this is a not leap year:".$y;
    }
}



?>
        <form method="post">
            <input type="text" name="year" placeholder="Year*"><br><br>
            <input type="submit" name="sub" value="submit">

        </form>
    </center>
</body>
</html>