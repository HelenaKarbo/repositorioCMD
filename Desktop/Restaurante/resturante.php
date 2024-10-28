<html>
	<head>
		<title>Heladeria</title>
		<link rel="Stylesheet" type="text/css" href="heladeria.css">
	</head>
	
	<body>
		<?
			$cliente=$_POST["cliente"];
			$saboresDisponibles = array();
			
			$primero=$_POST["primero"];
			$tiposenvase=array("Habitual","NoHabitual");
			
			$segundo=$_POST["segundo"];
			$tipostamaño=array("Sopa","Callos", "Caldo", "Ensalada");
			$preciosTamaño=array("9","8.5", "9.25", "8");
			
			$tercero=$_POST["tercero"];
			$tipostoppings=array("Merluza","Carne", "Macarrones", "Paella");
			$preciosToppings=array("7.5","8", "7.75", "9");
			
			$postre=$_POST["postre"];
			$tipostoppings=array("Fruta","Yogur", "Bizcocho", "Cafe");
			$preciosToppings=array("4.5","2.75", "3.5", "2.25");
			
			$bebida=$_POST["bebida"];
			$tipostoppings=array("Agua","Vino", "Cerveza", "Cola", "Naranja", "Limon");
			$preciosToppings=array("1.5","2.75", "2.5", "2", "2", "2");
			
			$precioTotal=0.0;
		?>
		
		<p>
			Sabor escogido: --------- <?= $sabor?> 
		</p>
		
		<?
			for($i=0;$i<count($tiposenvase);$i++){
				if($envase==$tiposenvase[$i]){
					$precioTotal += $preciosEnvase[$i];
				}
			}
		?>
		
		<p>
			Envase: <?= $envase?> --------- <?= $precioTotal?>
		</p>
		
		<?
			for($i=0;$i<count($tipostamaño);$i++){
				if($tamaño==$tipostamaño[$i]){
					$precioTotal += $preciosTamaño[$i];
					$importe=$preciosTamaño[$i];
				}
			}
		?>
		
		<p>
			Tamaño: <?= $tamaño?> --------- <?= $importe?>
		</p>
		
		<p>
		
			Toppings: 
			
		<? 
			if ($toppings && count($toppings) != 0){
				foreach($toppings as $topping){
					for($i=0;$i<count($tipostoppings);$i++){
						if($topping == $tipostoppings[$i]){
							$precioTotal += $preciosToppings[$i];
							$importe=$preciosToppings[$i];
						}
					}
				}
		?>
				<?=$topping?>  ---------  <?=$importe?>   <br> 
		<?
			} else {
		?>
				No hay toppings seleccionados
		<?
			} 
		?>
		
		</p>
		
		<p>
			Total: --------- <?= $precioTotal?> 
		</p>
	
	</body>
</html>