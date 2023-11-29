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
    $h=$_POST["h"];
    {
        if($h%4==0? 1901=<2016 && 2016=>1901)
             {
              
             echo "this is a leap year";
             }
        else
           {
            echo "not is a leap year";
           }
        }
   }

?>
        <form method="post">
            <input type="text" name="h" placeholder="enter your year*" required><br><br>

            <input type="submit" name="sub" value="submit">
            
        </form>
    </center>
</body>
</html>