<?php
$price=2000;
$checkin=mktime(0,0,0, date("m"),date("d"),date("y"));
$checkout=mktime(0,0,0, date("m"),date("d")+4,date("y"));
$diff=($checkout-$checkin)/86400;
$totle=$price*$diff;
echo "totle bill of your stay in hotal is:".$totle;


?>