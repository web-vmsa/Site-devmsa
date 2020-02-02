<!DOCTYPE html>
<html>
<head>
	<title>VMSA - Desenvolvimento Web</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/comentar.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
</head>

<body>
	<div class="topo">
		<div class="topoint">
			<div class="logo">
				<a href="index.php"><img src="../Imagens/web_vmsazul.png" border="0" width="400" height="400" style="margin-left: 390px;"></a>
			</div>
		</div>
	</div>

	<div class="entcontact">
		<div class="entcontactint">
			<br>
			<h2>Comentar</h2>
			<br>
			<form method="POST">
				Seu E-mail:<br><br>
				<input type="text" name="email"><br><br>
				Seu Nome:<br><br>
				<input type="text" name="assunto"><br><br>
				Como Você me Avalia:
				<select>
					<option>Muito Ruim</option>
					<option>Ruim</option>
					<option>Bom</option>
					<option>Muito Bom</option>
					<option>Excelente</option>
				</select><br><br>
				Complemento Curto:<br><br>
				<input type="text" name="complemento"><br><br>
				<input type="submit" value="Avaliar">
			</form>
		</div>
	</div>

	<div class="rodape">
		<div class="rodapeint">
			<strong>Victor Miguel - VMSA. Desenvolvimento Web @2020</strong>
		</div>
	</div>
</body>
</html>