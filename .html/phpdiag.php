<!DOCTYPE html>	

<html>

<head>
<meta charset="UTF-8">
<title>Testes</title>

<style type="text/css" media="screen">
*{margin: 0px 0px 0px 0px;
  padding: 0px 0px 0px 0px;}

body {background-color:#1c1b1b;
      margin: 25px 15%;  
      }


ul {list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #4a0080;
    border:2px solid black;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }

.menu li {float: left;} 



li a, .dropbtn {display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;}



li a:hover, .dropdown:hover .dropbtn {background-color: black;}



li.dropdown {display: inline-block;}



.dropdown-content {display: none;
		   position: absolute;
    		   background-color: #f9f9f9;
    		   min-width: 160px;
    		   box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		   z-index: 1;}



.dropdown-content a {color: black;
		     padding: 12px 16px;
		     text-decoration: none;
      		     display: block;
		     text-align: left;}



.dropdown-content a:hover {background-color: #f1f1f1;
			   border:1px solid black}



.dropdown:hover .dropdown-content {display: block;}

header {padding-top:40px;
	text-align:center;
	font-size:22pt;
	font-family:'Arial';
	height:70px;
	color: white;
	border:4px solid black;
        background-color:#4a0080;
        text-align:center;}

.subtitulo {font-size:15pt;
	    text-align:center;}

p {text-align:center}

@media(max-width:400px){
body {
      padding:10px;}
	ul {
    background-color: red;
  
    }
}

form {
  display: flex;
  flex-flow: column;
  justify-content: center;
  align-items: center;  
}

#info p:nth-child(1) {
    font-weight: 600;
    font-size: larger;
    margin-bottom: 10px;
}


</style>

</head>

<body>


<img
src=http://www.sp.senai.br/img/logo-senai.png
hspace=10px
vspace=5px
widgth=300px
height=50px
/>


<header>
Diagnóstico de Hardware
</header>

<br>

<ul class="menu">

  <li><a href="index.html">Pagina Inicial</a></li>

  <li class="dropdown">

    <a href="javascript:void(0)" class="dropbtn">Testes</a>

    <div class="dropdown-content">

      <a href="diagnostico2.html">Diagnóstico de Hardware</a>

      <a href="cpu2.html">Teste de processamento</a>

      <a href="ram2.html">Teste de memória RAM</a>

      <a href="internet2.html">Teste de internet</a>

    </div>

  </li>

 <li><a href="informacoes.html">Como funciona?</a></li>

 <li><a href="download2.html">Download</a></li> 

<li><a href="contato.html">Contato</a></li>

</ul>

<br>

		

<div style="background-color:white;
      padding:60px;
	    height:800px;
            border:2px solid black">

 <p style="margin-bottom:10px;"> Escolha um dos dipositivos para ser analisado e diagnosticado:





<ol>
<li>USB</li>
<li>PCI</li>
<li>Memória RAM</li>
<li>HD</li>
<li>CPU</li>
<li>Placa Mãe</li>
</ol>



<p style="text-align:center">Digite o número respectivo ao Hardware desejado:


<form style="font-size:12pt;margin-bottom:10px;"
	     method="post" action="phpdiag.php">

<input type="text" name="opcao" style="text-align:center">

<input type="submit"
       value="Iniciar">

</form>

<div id="info" style="border:2px solid black; padding: 10px;margin:15px;font-size:10pt;">
<?php
$resposta= $_POST["opcao"];
switch ($resposta){
case 1:
echo "<p>Entrada USB</p>";
$usb= shell_exec("lsusb");
sleep(3);
echo "<p style=\"display: inline;\">$usb</p>";
break;

case 2:
echo "<p>Entrada PCI</p>";
echo "";
$pci= shell_exec("lspci");
sleep(3);
echo "<p style=\"display: inline;\">$pci</p>";
break;

case 3:
echo "<p>Memória RAM</p>";
$ram= shell_exec("free -m");
sleep(3);
echo "<p style=\"display: inline;\">$ram</p>";
break;

case 4:
echo "<p>HD</p>";
$hd= shell_exec("df -h");
sleep(3);
echo "<p style=\"display: inline;\">$hd</p>";
break;

case 5:
echo "<p>CPU</p>";
$cpu= shell_exec("head 19 /proc/cpuinfo");
sleep(3);
echo "<p style=\"display: inline;\">$cpu</p>";
break;

case 6:
echo "<p>Placa mãe</p>";
$plc= shell_exec("lshw -class system");
sleep(3);
echo "<p style=\"displ  ay: inline;\">$plc</p>";
break;
}
?>
</div>
</div>
</body>
</html>
