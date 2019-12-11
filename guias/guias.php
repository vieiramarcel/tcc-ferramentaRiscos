<?php
  include("../cabecalho/cabecalho.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>RM-AGILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="guias.css" />
	<link rel="shortcut icon" href="../Imagens/favicon.png" type="image/x-png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
	<script src="bd.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="jsPDF-master\dist\jspdf.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div id = "pdfid" class="painel">
	
		<h1> Conjunto de práticas</h1>
		<button class="accordion"><b>Metodologia ágil</b></button>	
		<div class="panel" id="metodologiaAgil">

		</div>

		<button class="accordion"><b>Pápeis</b></button>
		<div class="panel" id="papeis">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>


		<button class="accordion"><b>Identificação</b></button>
		<div class="panel" id="identificacao">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<button class="accordion"><b>Análise</b></button>
		<div class="panel" id="analise">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    	</div>

    	<button class="accordion"><b>Planejamento</b></button>
		<div class="panel" id="planejamento">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   		</div>
    
    	<button class="accordion"><b>Resposta</b></button>
		<div class="panel" id="resposta">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	
		<button class="accordion"><b>Monitoramento</b></button>
		<div class="panel" id="monitoramento">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    	</div>
		<div class = "gerarPdf">
			<button type = "submit" class = "pdf">Gerar pdf</button> 
		</div>
	</div>
	<div id="elementH"></div>

	<script type="text/javascript">
		var acc = document.getElementsByClassName("accordion");
		var i;
		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
		    	var panel = this.nextElementSibling;
		    	if (panel.style.maxHeight){
					panel.style.maxHeight = null;
		    	} else {
					panel.style.maxHeight = panel.scrollHeight + "px";
		    	} 
			});
		}
		
		$(document).ready(function () {
			var selectedItems = JSON.parse(sessionStorage.getItem('selectedItems'));
			for(var i = 0; i < selectedItems.length; i++) {
				var selected = selectedItems[i];
				var itemSelected = bd[selected];
				var guias = Object.keys(bd[selected]);
				for(var x = 0; x < guias.length; x++) {
					var indice = guias[x];
					$('#'+indice).append(`<p>${itemSelected[indice]}</p>`);
				}
			}
		 });

		$('.pdf').click(function(){
			$('.accordion').click();
			var doc = new jsPDF();
			var elementHTML = $('#pdfid').html();

				var specialElementsHandlers = {
					'#elementH': function(element, renderer){
						return true;
						
					}
				};
				doc.fromHTML(elementHTML, 15 , 15, {
					'width': 185,
					'margin': 40,
					'elementHandlers': specialElementsHandlers
					
				});
				
				doc.save('gestaoAgilRiscos.pdf');
				$('.accordion').click();
		});

	</script>
</body>