 <meta charset="utf-8">
<?php
include_once "flag.php";
ini_set("display_errors", 0);
show_source(__FILE__);
$str = strstr($_SERVER['REQUEST_URI'], '?');
$str = substr($str,1);
$str = str_replace('var','',$str);
parse_str($str);

echo md5($var1);

echo md5($var2);
if(md5($var1) == md5($var2) && $var1 !== $var2){
    echo "За за мaй энэ flag: ".$flag;
}
?>