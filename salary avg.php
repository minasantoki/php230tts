<?php
function employee($n,$m,$u)
{
    $totle=$n+$m+$u/3;
    return $totle;
}
echo "salary avg.=".employee(78950,6750,15700);
?>