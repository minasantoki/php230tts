<?php

// in_array() : this function is used to check an array is available in array or not 

$mn=array("meena","mit","mohit");
print_r($mn);
if(in_array("raj",$mn))
{
    echo "available";

}
else
{
    echo "not available";
}

?>