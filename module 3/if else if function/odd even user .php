<html>
    <head>
        <title></title>
</head>
<body>
    <?php
    if(isset($_POST["sub"]))
    {
     $nim1=$_POST["nim1"];
       if($nim1%2==0)
          {
           echo "<h2 align='center' style='color:green'> number is odd </h2>";

          }
       else
          {
           echo "<h2 align='center' style='color:red'> number is even </h2>" ;
          }
    }
?>
<center>
  <form method ="post">
    <h3>enter your namber</h3>
    <input type="text" name="nim1" placeholder="sub" required><br><br>
    <input type="submit" name="sub" value="submit">
</form>
</center>
</body>
</html>

  
    


