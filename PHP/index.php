<!DOCTYPE html>
<html>
<head>
	<title>VMSA - Desenvolvimento Web</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
	<script type="text/javascript" src="../Javascript/javascript.js"></script>
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
					<li><a href="curriculo.php">CURRÍCULO</a></li>
					<li><a href="portfolio.php">PORTFÓLIO</a></li>
					<li><a href="contato.php">CONTATO</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="apresenta">
		<div class="apresentaint">
			<div class="apresent">
				<img src="../Imagens/perfil.png" width="500" height="400" style="margin-top: 15px; margin-left: 40px;">
			</div>
			<div class="apresentext">
				<h2>Victor Miguel, programador!</h2>
				<p>Trabalhando e atuando diretamente na<br>
				construção de sistemas e projetos livres<br>
				utilizando essencialmente PHP, SQL e HTML, mas<br>
				conhecedor de CSS e Javascript.<br><br>Tendo feito o curso<br>PHP - Do Zero Ao Profissional<br>
				da B7Web que é amplamente reconhecido como<br>
				uma das maiores escolas de programadores de<br>
				todo o país, e aplicando os conhecimentos nesse<br>site e em outros projetos.<br><br>Venho me apresentar ao mercado de TI<br>da melhor maneira possível, e estou a disposição<br> para projetos livres e empresas.</p>
			</div>
		</div>
	</div>

	<div class="meio">
		<div class="meioint">
			<div class="leftside">
				<div class="projetos">
					<h2>Projetos</h2>
				</div>
					<div class="projeto">
						<div class="titulo">Sistema de Login</div>
						<div class="desc">Usando PHP e HTML, fiz um pequeno sistema de Login extremamente útil e simples.</div>
						<div class="project"><img src="../Imagens/login.png" width="500" height="245" border="0"></div>
						<div class="todos">
							<a href="projetos.php">Ver Projetos</a>
						</div>
					</div>
			</div>
			<div class="rightside">
				<div class="medias">
					<h2>Redes Sociais</h2>
				</div>
				<div class="redes">
					<a href="https://www.facebook.com/Victor-Miguel-110948370470830/?__tn__=%2Cd%2CP-R&eid=ARAERlJQbHEaXzbc6hPxf7virhJGLZFYIsBJZIf24mzf0BQZN8Asq17xH3WJW3CpgHxnoZXsAkUgJaGC" target="_blank"><img src="../Imagens/facebook" width="40" height="40" border="0"></a>
					<a href="https://www.instagram.com/web_vmsa/?hl=pt-br" target="_blank"><img src="../Imagens/instagram" width="40" height="40" border="0"></a>
					<a href="https://github.com/web-vmsa" target="_blank"><img src="../Imagens/github" width="40" height="40" border="0"></a>
					<a href="https://www.linkedin.com/in/victor-miguel/" target="_blank"><img src="../Imagens/linkedin" width="40" height="40" border="0"></a>
					<a href="https://www.youtube.com/channel/UCzcXLI3benFJdNkKauHNJ4g" target="_blank"><img src="../Imagens/youtube" width="40" height="40" border="0"></a>
				</div>

				<?php
				try {
					$pdo = new PDO("mysql:dbname=devmsa;host=localhost", "root", "");
					$sql = "SELECT * FROM comentarios ORDER BY id DESC LIMIT 2";
					$sql = $pdo->query($sql);
					foreach ($sql->fetchAll() as $coment):
						?>
							<div class="coments">
								<div class="ulticoment">Comentário</div>
								<div class="emailcoment"><?php echo $coment['email'] ?></div>
								<div class="nomecoment"><?php echo $coment['nome'] ?></div>
								<div class="avaliacoment"><?php echo $coment['avalia'] ?></div>
								<div class="desccoment"><strong><?php echo $coment['complemento'] ?></strong></div>
							</div>
						<?php
					endforeach;
				} catch (Exception $e) {
					echo "Falhou".$e->getMessage();
				}
			?>

				<div class="comentar">
					<a href="comentar.php">Comentar</a>
				</div>
			</div>
		</div>
	</div>

	<div class="rodape">
		<div class="rodapeint">
			<strong>Victor Miguel - VMSA. Desenvolvimento Web @2020</strong>
		</div>
	</div>
</body>
</html>