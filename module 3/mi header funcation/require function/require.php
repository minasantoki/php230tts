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
       
      //require("logic_login.php");
      require_once("logic_login.php");
      require_once("logic_login.php");


?>
        <form method="POST">
            Email<input type="text" name="email" placeholder="Email*" required><br><br>
            password<input type="password" name="pass" placeholder="password*" required><br><br>
            <input type="submit" name="sub" value="login">

        </form>
    </center>
</body>
</html>