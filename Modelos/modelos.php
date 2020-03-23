<?php
	include("../cabecalho/cabecalho.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>RM-AGILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="modelos.css" />
	<link rel="shortcut icon" href="../Imagens/favicon.png" type="image/x-png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div id = "pdfid" class="painel">
		<h1> Modelos</h1>

		<button class="accordion"><b>Scrum</b></button>
		<div class="panel" id="papeis">
			<a class="scrum"><img src="../Imagens/scrum.png" class="img-fluid" alt="Responsive image"></a>
		</div>


		<button class="accordion"><b>Kanban</b></button>
		<div class="panel" id="identificacao">
			<a class="scrum"><img src="../Imagens/kanban.png" class="img-fluid" alt="Responsive image"></a>
		</div>

		<button class="accordion"><b>XP</b></button>
		<div class="panel" id="analise">
			<a class="scrum"><img src="../Imagens/xp.png" class="img-fluid" alt="Responsive image" ></a>
    	</div>
	
		<button class="accordion"><b>Outro</b></button>
		<div class="panel" id="monitoramento">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    	</div>
	</div>

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

	</script>
</body>