<?php
       if(isset($_POST["sub"]))
       {
        $eml=$_POST["email"];
        $pass=$_POST["pass"];

        if($eml=='asdfghjkl@.com' && $pass=='123456')
        {
            echo "you are login in successfully";
            header('location:welcome.php');

        }
        else
        {
            echo "your are wrong email & password";
            //header('refresh:5,require.php');
           header('refresh:5,require_once.php');
        }
       }


?>