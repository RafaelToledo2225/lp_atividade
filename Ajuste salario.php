<!DOCTYPE html>
<html>
<head>
	<title>Reajuste de salário</title>
</head>
<body>
	<h1>Reajuste de salário</h1>
	<form method="post">
		<label for="salario">Digite o salário:</label>
		<input type="number" id="salario" name="salario" required><br><br>
		<input type="submit" value="Calcular reajuste">
	</form>
	<?php
		if(isset($_POST['salario'])){
			$salario = $_POST['salario'];

			if($salario <= 300){
				$novoSalario = $salario * 1.5; //reajuste de 50%
				echo "<p>O salário recebeu um reajuste de 50% por ser menor ou igual a R$ 300.</p>";
			} else {
				$novoSalario = $salario * 1.3; //reajuste de 30%
				echo "<p>O salário recebeu um reajuste de 30% por ser maior que R$ 300.</p>";
			}

			echo "<p>Salário reajustado: R$ " . number_format($novoSalario, 2, ',', '.') . "</p>";
		}
	?>
</body>
</html>