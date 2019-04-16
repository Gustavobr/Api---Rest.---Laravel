<!DOCTYPE html>
<html>
<head>
	<title>Form_Add</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="container" align="center">
		<img src="css/Uninta.png" style="width: 20%; height: 20%;">
	<div class="jumbotron">
		<center><h3 class="page-header">Novo Aluno:</h3></center>
	</div>
	</div>	
	<center>
	<fieldset class="form-group">
	<div id="form_add" class="col-xs-4">
		<form class="form_group" method="post" style="width: 50%; height: 50%;">
			<label class="label-primary" for="nome">Nome:</label>
				<br/>
			<input type="text" required name="nome" fielsize="20" placeholder="Nome" class="form-control" size="20">
				<br/>
			<label class="label-primary" for="nome">Curso:</label>	
				<br/>
			<input type="text" required name="curso"  style="size: 20px;"fielsize="20" placeholder="curso" class="form-control" size="20">
				<br/>
			<label for="sede" class="label-primary">Sede:</label>
			 <select class="custom-select" id="select_sede" name="campus" required>
   				 <option selected>Escolha a sede:</option>
   				 <option value="Uninta-Sul">Uninta-Sul</option>
    			 <option value="Uninta-Sede">Uninta-Sede</option>
  			</select>	
  				<br/>
  				<br/>
  			<input type="button" class="btn btn-success" onclick="" value="Gravar"/>

		</form>
	</fieldset>
	</center>
	</div>
	</div>

</body>
</html>