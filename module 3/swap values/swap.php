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
    <?php
  if(isset($_POST["sub"]))
  {
$a=$_POST["m1"];
$b=$_POST["m2"];

  $a=$a+$b;   //20+10=30
  $b=$a-$b;   //30-20=10
  $a=$a-$b;   //30-10=20

  echo "swap value is a".$a."<br>"."swap value is b".$b;
  }
  
  ?>
    
    <center>
        <form method="post">
            <input type="text" name="m1" placehloder="enter number"><br><br>
            <input type="text" name="m2" placehloder="enter number"><br><br>
            <input type="submit" name="sub" value="Submit">
            </form>

</center>
</body>
</html>