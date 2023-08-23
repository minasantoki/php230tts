<html>
    <head>
        <title></title>
</head>
<body>
    <?php
   if(isset($_POST["sub"]))
   {
    $m1=$_POST["mun1"];
    $m2=$_POST["mun2"];
    $m3=$_POST["mun3"];
   
    if($m1>$m2 && $m1>$m3)
   {
    echo "m1 is max number ";

   }
   elseif ($m2>$m3 && $m2>$m1)
   {
    echo "m2 is max number";

   }
   else 
   {
    echo "m3 is max number";
   }

   }

?>
<center>
    <form method="post">
        <h3>Enter your number</h3>
    
        <input type="text" name="mun1" placeholder="number"><br><br>
        <input type="text" name="mun2" placeholder="number"><br><br>
        <input type="text" name="mun3" placeholder="number"><br><br>
        <input type="submit" name="sub" value="submit">
</form>
</center>
</body>
</html>