<?php
function subject($ph,$com,$math)
{
    $avg=$ph+$com+$math/3;
    return $avg;
}
echo "subject sum=".avg(85,99,33);
?>