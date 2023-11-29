<?php
$str="my name is meena";
echo strlen($str);  
echo $str ."<br>";

//strpos
echo strpos("hello meena" ,"meena")."<br>";

//uc first
$ucf="meena santoki";
echo ucfirst($ucf)."<br>";

//ucwords
$wrd="santoki meena";
echo ucwords($wrd)."<br>";

//strtoupper
$name="hello  student";
echo strtoupper($name)."<br>";

//strtolower
$a="HELLO STUDENT";
echo strtolower($a)."<br>";

//base64_encode
$b="santoki meena";
echo base64_encode($b)."<br>";

//base64_decode
$b="c2FudG9raSBtZWVuYQ==";
echo base64_decode($b)."<br>";

//md5
$c="meenasantoki&&@.gmeil";
echo md5($c)."<br>";

//decode
$a="70990d5ddf82f3af5d3b339468fcfb5c";
echo base64_decode($a)."<br>";

//encode
$a="70990d5ddf82f3af5d3b339468fcfb5c";
echo base64_encode($a)."<br>";

//rand
echo rand(111111,999999)."<br>";

//strstr
echo strstr("hello sir","sir")."<br>";
echo strstr("meena santoki","Na")."<br>";
echo strstr("meena santoki","na")."<br>";

//stristr
echo stristr("hello sir","sir")."<br>";
echo stristr("meena santoki","Na")."<br>";
echo stristr("meena santoki","na")."<br>";

//trim
$b="santoki meena sanjay bhai";
echo trim($b,"bhai")."<br>";

//rtrim
$b="santoki meena sanjay bhai";
echo rtrim($b,"bhai")."<br>";

//ltrim
$b="santoki meena sanjay bhai";
echo ltrim($b,"santoki")."<br>";

//strrev
$a="meena santoki";
echo strrev($a)."<br>";

//str_shuffle
$a="santoki meena";
echo str_shuffle($a)."<br>";

//explode
$b="santoki meena";
print_r(explode(" ",$b))."<br>";


//implode
$arr=array(0=>"hello", 1=>"meena", 2=>"santoki");
echo implode(" ",$arr);

?>