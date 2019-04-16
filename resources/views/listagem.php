<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<title>Listagem de alunos</title>

</head>
<body>	
	<div class="jumbotron" align="center">
		<h3> Listagem de Alunos</h3>
		<div id="logo">
			<img src="css/Uninta.png" alt="Uninta" width="20%" height="20%" />
	</div>
		
	</div>	
		<?php foreach ($alunos as $a):?>
			
		
		<table class="table table-hover" align="center" style="width: 40%; height: 40%;">
			<fieldset>
			<thead>
				<th scope="row">Nome</th>
				<th scope="row">Curso</th>
				<th scope="row">Email</th>
			</thead>	
			<tr>
				<td class="table-light"><?= $a->nome ?> </td>
				<td  class="table-light"><?= $a->curso ?></td>
				<td class="table-light"><?= $a->email ?>+</td>
			</tr>

		</fieldset>
		</table>	
	<?php endforeach; ?>
		<br/>
	<center>
		<footer>
			<span class="btn-link"><a href="/" class="btn-link"><u class="btn-link">Voltar</u> <span></span>></a></span><span class="btn-link"><input type="button" value=Imprimir class="btn-info" onclick="javascript:window.print()"/></span>
		</footer>
	</center>
</body>
</html>