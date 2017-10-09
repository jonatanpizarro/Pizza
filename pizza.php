<table>

	<?php 
		
		$tamaño=$_GET["tamaño"];
		$massa=$_GET["massa"];
		$ingredientes=$_GET ["ingre"];
		$precio =0;


		$i=0;

	 
		if (in_array("Oregano", $ingredientes)) {
  		  	
		echo "<h2> Tamaño </h2>";
		if ($tamaño=="1") {
			$precio=3;
			echo "Tamaño pequeño </br>";
		}elseif ($tamaño=="2") {
			$precio=5;
			echo "Tamaño mediano </br>";
		}else{
			$precio=7;
			echo "Tamaño grande </br>";
		}






		echo "<h2> Massa </h2>";
		if ($massa=="1"){
			echo "Massa fina </br>";
		}else {
			echo "Massa gruesa </br>";
		}





		echo "<h2> Ingredientes </h2>";
		foreach ($ingredientes as $ing){
			$i++;
			echo "$ing </br>";


		}

		$precio=$precio + ($i*0.5);

		
		echo "El precio final es de : $precio euros";
		}else{
			
			echo '<script language="javascript">';
			echo 'alert("Oregano obligatorio")';
			echo '</script>';
			echo '<a href="formuPizza.php">' ;
			
			echo " <h1 type='button' href='formuPizza.php'> Volver al formulario </h1>" ;

		
		}

		

			

	 ?>
		
</table>