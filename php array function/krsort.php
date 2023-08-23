<?php


$mn=array("meena","sit","geeta");
//array sort in desending order
krsort($mn);
foreach ($mn as $value) 
{
    echo "name is:".($value)."<br>";
}


?>