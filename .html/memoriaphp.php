<!DOCTYPE html>

<html>

<head>
<meta charset= "UTF-8">
<title>Testes</title>

<style type="text/css" media="screen">
*{margin: 0px 0px 0px 0px;
  padding: 0px 0px 0px 0px;}

body {background-color:#1c1b1b;
	  margin: 30px 15%}



ul {list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #4a0080;
    border:2px solid black;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }



.nav li {float: left;}



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
Teste de Memória RAM
</header>

<br>

<ul class="nav">

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
						whidght:1000px;
						height:800px;
						padding:60px;
            border:2px solid black">

<p> Escolha a quantidade de memória desejada abaixo:</p>

                <br>
	<ol>
	<li>100 MB</li>
	<li>1024 MB</li>
	<li>2048 MB</li>
	<li>4096 MB</li>
	<li>6144 MB</li>
	<li>8192 MB</li>
	<li>12288 MB</li>
	<li>16384 MB</li>
	<li>32768 MB</li>
	</ol>
                <br>
								<p>Digite o número da quantidade de memória:</p>
                <form style="color:black;
                             font-size:12pt;"
											method="post" action="memoriaphp.php">
                     		<center>
                      <input type="text" name="opcao" style="text-align:center">
                      <br>
                      <input type="submit" value="iniciar">
                        </center>
                </form>
<br>
<br>
<br>
<div style="border:2px solid black;padding:2em "
	<?php
		$resposta= $_POST["opcao"];

		switch ($resposta){
			case 1:
				echo "Teste em 100";
				shell_exec("memtester 100 1 >> mem.txt");
				sleep(15);
				$cem= shell_exec("tail -21 mem.txt");
				echo "<pre>$cem</pre>";
			break;

			case 2:
				echo "Teste em 1024";
				$um= shell_exec("memtester 1024 1");
				sleep(5);
				echo "<pre>$um</pre>";
			break;
	
			case 3:
				echo "Teste em 2048";
				$dois= shell_exec("memtester 2048 1");
				sleep(5);
				echo "<pre>$dois</pre>";
			break;

			case 4:
				echo "Teste em 4096";
				$quatro= shell_exec("memtester 4096 1");
				sleep(5);
				echo "<pre>$quatro</pre>";
			break;

			case 5:
				echo "Teste em 6144";
				$seis= shell_exec("memtester 6144 1");
				sleep(5);
				echo "<pre>$seis</pre>";
			break;

			case 6: 
				echo "Teste em 8192";
				$oito= shell_exec("memtester 8192 1");
				sleep(5);
				echo "<pre>$oito</pre>";
			break;

			case 7:
				echo "Teste em 12288";
				$doze= shell_exec("memtester 12288 1");
				sleep(5);
				echo "<pre>$doze</pre>";
			break;

			case 8:
				echo "Teste em 16384";
				$dezeseis= shell_exec("memtester 16384 1");
				sleep(5);
				echo "<pre>$dezeseis</pre>";
			break;

			case 9:
				echo "Teste em 32768";
				$trinta= shell_exec("memtester 32768 1");
				sleep(5);
				echo "<pre>$trinta</pre>";
			break;
}	
?>
</div>
</div>
</body>
</html>
