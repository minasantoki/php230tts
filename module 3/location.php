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
      $em=$_POST["email"];
      $pass=$_POST["pass"];
      if($em=='mk@santokigmail.com' && $pass=='220618')
      {
        echo "<h3 aling='center' style='color:green>you are loggin in successfully"."</h3>";
     header("location:welcome.php");
    }
    else
    {
        echo "<h3 aling='center' style='color:green>your are  email & password wrong"."</h3>";
        // header("location:location.php");
    }
    }


        ?>
        
        <form method="post">
            Email<input type="text" name="email" placeholder="Email*" required><br><br>
            password<input type="password" name="pass" placeholder="password*" required><br><br>
            <input type="submit" name="sub" value="login">
        </form>
    </center>
    
</body>
</html>