<meta charset="utf-8">
<?php
error_reporting(0);
if (empty($_GET['Z'])) {
   show_source(__FILE__);
   die();
}else{
   include('flag.php');
$H = "www.haruulzangi.mn";
$Z = $_GET['Z'];
@parse_str($Z);
if ($H[0] != 'aabC9RqS' && md5($H[0]) == md5('aabC9RqS')) {
   echo $flag;
}else{
exit('Найрах арга чинь буруудааад байна ....');
}
}
?>
