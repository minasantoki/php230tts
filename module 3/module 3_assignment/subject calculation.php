<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><Page Title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <center>
    <?php
  if(isset($_POST["sub"]))
  {
    $a=$_POST["phy"];
    $b=$_POST["che"];
    $c=$_POST["bio"];
    $d=$_POST["math"];
    $e=$_POST["com"];
    $totle=$a+$b+$c+$d+$e;
    $per=$totle/5;
    echo $per."%";
    {
        if($per>=95)
        {
            echo "gread is A+"."<br>"."<br>";
        }
     elseif($per>=90)
     {
        echo "gread is A"."<br>"."<br>";
     }
     elseif($per>=80)
     {
        echo "gread is B"."<br>"."<br>";
     }
     elseif($per>=70)
     {
        echo "gread is C"."<br>"."<br>";
     }
     elseif($per>=50)
     {
        echo "gread is D"."<br>"."<br>";
     }
     elseif($per>=35)
     {
        echo "gread is PASS"."<br>"."<br>";
     }
     elseif($per>=34)
     {
        echo "gread is FILE"."<br>"."<br>";
     }
    }
  }


?>


        <form method="post" style="font-size:20px;">
            physice<input type="number" name="phy" placeholder="enter your number*" required><br><br>
            chemistry<input type="number" name="che" placeholder="enter your number*" required><br><br>
            biology<input type="number" name="bio" placeholder="enter your number*" required><br><br>
           mathematice <input type="number" name="math" placeholder="enter your number*" required><br><br>
            computer<input type="number" name="com" placeholder="enter your number*" required><br><br>
            <input type="submit" name="sub" value="submit">
        </form>
    </center>
</body>
</html>




