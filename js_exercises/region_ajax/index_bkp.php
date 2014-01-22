<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title>Karol Harumi - Ajax</title>
	</head>
	
	<body>
		<div id="wrapper">
			<header id="main-header">
				<div class="full">
					<a href="index.html" title="Karol Harumi" class="logo">Karol</a>
				</div>
			</header>

			<nav id="main-nav">
				<div class="full">
					<ul>
						<li><a href="index.html" title="Home">Home</a></li>
						<li><a href="index.html" title="Home">Link 2</a></li>
						<li><a href="index.html" title="Home">Link 3</a></li>
						<li><a href="index.html" title="Home">Link 4</a></li>
						<li><a href="index.html" title="Home">Link 5</a></li>
						<li><a href="contato.html" title="Contato">Contato</a></li>
					</ul>
				</div>	
			</nav>	

			<section id="main-content">
				<div class="full">
					
					<div id="myDiv" class="content-left"></div>

					<div class="content-right">
						<img src="img/mapa.png" width="681" height="600" border="0" />
						
						<div id="botoes">
							<a class="bt-verde">Verde</a>
							<a class="bt-laranja">Laranja</a>
							<a class="bt-amarelo">Amarelo</a>
							<a class="bt-vermelho">Vermelho</a>
							<a class="bt-azul">Azul</a>
						</div>
					</div>

				</div>	
			</section>	

			<footer id="main-footer">
				<div class="full">
					rodapé
				</div>	
			</footer>	
		</div>	

		<script type="text/javascript">

			function loadXMLDoc(){
				var ajax;
				
				if (window.XMLHttpRequest){ // code for IE7+, Firefox, Chrome, Opera, Safari
					ajax = new XMLHttpRequest();
				}
				else{ // code for IE6, IE5
					ajax = new ActiveXObject("Microsoft.XMLHTTP");
				}
				
				ajax.onreadystatechange = function(){
					if (ajax.readyState == 4 && ajax.status == 200){

						obj = JSON.parse(ajax.responseText);
						//document.getElementById("myDiv").innerHTML='<h2>' + obj.regioes[0].area + '</h2><p>' + obj.regioes[0].descricao + '</p>';
						
					}
				}

				ajax.open("GET","regioes.json",true);
				ajax.send();
			}



			function teste(){
				var botoes = document.getElementById('botoes').getElementsByTagName('a');

				for(var i = botoes.length - 1; i >= 0; i--){
					botoes[i].onclick = function(){
						alert('vaaai');
					}
				}
			}teste();
			
		</script>
	</body>	
</html>