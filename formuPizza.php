<!DOCTYPE html>
<style type="text/css">






</style>

<html>
<head>
	<title></title>
</head>
<body>
	
	<form action="pizza.php" method="GET">
		


		<h2>Tamaño </h2>
		<input type="radio" name="tamaño"  value="1" checked=""> Pequeña ---> 3 euros</br>

		<input type="radio" name="tamaño"  value="2" checked=""> Mediana ---> 5 euros  </br>

		<input type="radio" name="tamaño"  value="3" checked=""> Grande ---> 7 euros </br>

		



		<h2>Tipo de massa</h2>

		<input type="radio" name="massa"  value="1" checked=""> Fina  </br>

		<input type="radio" name="massa"  value="2"> Gruesa  </br>
	





		<h2>Ingredientes </h2>

		<p>0,5 euros + por ingrediente</p>

		<input type="checkbox" name="ingre[]" id="ingre"   value="Oregano"> Oregano (Obligatorio)</br>

		<input type="checkbox" name="ingre[]" id="ingre" value="Salsa de tomate"> Salsa de tomate </br>

		<input type="checkbox" name="ingre[]" id="ingre" value="Beacon"> Beacon </br>
		
		<input type="checkbox" name="ingre[]" id="ingre" value="Queso"> Queso </br>

		<input type="checkbox" name="ingre[]" id="ingre" value="Pepperoni"> Pepperoni </br>

		<input type="submit" value="Enviar">
	


	</form>

</body>
</html>