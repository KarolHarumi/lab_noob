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
					
					<div class="sidebar">
						Nenhum conteúdo carregado.
					</div>

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
		
		<script src="js/jquery-2.0.2.min.js"></script>
		<script type="text/javascript">

			// $.getJSON('regioes.json', function(data){

			// 	for(var i = 0; i < data.regioes.length; i++){
			// 		$('.sidebar').append('<strong>' + data.regioes[i].area + '</strong>' + '<br />');
			// 		$('.sidebar').append(data.regioes[i].descricao + '<br /><br />');
			// 	}
				
			// });

			$('#botoes a').click(function(){
				var i = $('#botoes a').index(this);
				
				$(".sidebar").empty();

				$.getJSON('regioes.json', function(data){
					$('.sidebar').append(data.regioes[i].area + '<br />');
					$('.sidebar').append(data.regioes[i].descricao + '<br /><br />');
				});	

			});
			
		</script>
	</body>	
</html>