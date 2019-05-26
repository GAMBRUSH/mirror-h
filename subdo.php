<?php
$c = "\033[0;36m";
$y = "\033[93m";
$w = "\033[0m";
$g = "\033[92m";
$r = "\033[91m";
echo "$c#######################	$r| $w Auto Generate Subdomain
$c# $y|S|U|B|D|O|M|A|I|N| $c#	$r| $g@Author : Gambrush 
$c# $y|G|E|N|E|R|A|T|O|R| $c#	$r| $g@Github : https://github.com/gambrush 
$c#######################	$r| $g@Version : 1.0

";
echo $r;
echo "Domain:$w http://";
$d = trim(fgets(STDIN));
echo $r;
echo "Jumlah:$w ";
$h = trim(fgets(STDIN));
echo $r;
echo "Output:$w ";
$o = trim(fgets(STDIN));
function generateRandomString($length = 10) {
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++){
$randomString .= $characters[rand(0, $charactersLength - 1)];
}
return $randomString;}
$file = fopen($o,"w");
	global $h;
	global $d;
	for ($i=1; $i <= $h; $i++){
		fwrite($file,"http://".generateRandomString().".$d"."\n");
		}
		fclose($file); 

?>
    