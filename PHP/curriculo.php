<!DOCTYPE html>
<html>
<head>
	<title>VMSA - Desenvolvimento Web</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/curriculo.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
	<div class="topo">
		<div class="topoint">
			<div class="logo">
				<a href="index.php"><img src="../Imagens/novalogovmsa.png" border="0" style="margin-top: 15px; margin-left: 7px;"></a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="projetos.php">PROJETOS</a></li>
					<li><a href="curriculo.php" class="active">CURRÍCULO</a></li>
					<li><a href="portfolio.php">PORTFÓLIO</a></li>
					<li><a href="contato.php">CONTATO</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="curriculo">
		<div class="curriculoint">
			<br>
			<h2>Quer Ver o Meu Currículo?</h2>
			<p>Infelizmente não disponibilizo meu currículo<br>
				aqui no site, mas caso você seja uma empresa ou<br>um contratante livre, envie seus dados abaixo e<br>entrarei em contato!</p>
			<form method="POST">
				Nome:<br><br>
				<input type="text" name="nome"><br><br>
				E-mail:<br><br>
				<input type="email" name="email"><br><br>
				Você é: 
				<select>
					<option>Empresa</option>
					<option>Recrutador</option>
					<option>Pessoa Livre</option>
				</select><br><br>
				<input type="submit" value="Enviar">
			</form>
		</div>
	</div>

	<div class="email">
		<div class="mail">
			<br>
			<h2>Ou, contate-me diretamente pelo E-mail:</h2>
			<p>web.vmsa@gmail.com</p>
			<a href="contato.php" style="color: white; background-color: blue; padding: 5px; border-radius: 2px; text-decoration: none;">Contato</a>
		</div>
	</div>

	<div class="rodape">
		<div class="rodapeint">
			<strong>Victor Miguel - VMSA. Desenvolvimento Web @2020</strong>
		</div>
	</div>
</body>
</html>