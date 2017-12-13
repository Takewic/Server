<!DOCTYPE html>

<html>

<head>
<meta charset= "UTF-8">
<title>Testes</title>

<style type="text/css" media="screen">

*{margin: 0px 0px 0px 0px;
  padding: 0px 0px 0px 0px;}

body {background-color:#1c1b1b;
      border:2px solid white;
      padding:60px;}

ul {list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #4a0080;
    border:2px solid black;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }

li {float: left;}

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
	body {padding:10px;}
	ul {background-color: red;}
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
Teste de Internet
</header>

<br>

<ul>

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
	    whidght:500px;
       	    height:400px;
	    padding:60px;
            border:2px solid black"/>

<p>Aperte em iniciar, e espere 50 segundos para adiquirir o resultado:</p>

		<br>

		<br>

		<form style="color:black;
			     font-size:12pt;"
			     method="post" action="internetphp.php">

			<center>
				<input type="submit" value="iniciar" style="widht:35px">
			</center>

</form>

<br>
<br>
<br>

<div style="border:2px solid black; padding:2em"
<?php
$resposta= $_POST["opcao"];
echo "Resultado do teste:";
$int= shell_exec("speedtest-cli");
echo "<pre>$int</pre>";
?>
</div>

</body>
</html>
