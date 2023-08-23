<?php
$mn=array("meena","sit","rahi","geeta");
//array sort in asending order
ksort($mn);
foreach ($mn as $value) 
{
    echo "name is:".($value)."<br>";
}

//$mn=array("meena","ravi","sit","geeta",);


//array sort in decending order
//krsort($mn);
/*foreach ($mn as $value) 
{
    echo "name is:".($value)."<br>";
}
*/

?>