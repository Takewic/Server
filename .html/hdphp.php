<!DOCTYPE>
<html>
<head>
	<title>Teste de HD </title>
</head>
<?php
echo "HD"; 
$escolha= shell_exec $(fdisk -l 2> /dev/null | grep 'Disk /dev' | cut -d" " -f2 | cut -b1-8)
sleep(3);
echo "<pre>$escolha</pre>"
?>
</html>

<!--
 $resposta= $_POST["opcao"];
switch ($resposta){
case 1:
echo "Entrada USB";
$usb= shell_exec("lsusb");
sleep(5);
echo "<pre>$usb</pre>";
break;
<
