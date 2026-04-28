<html>

<head>

<title>Programacion III</title>

</head>

<body>


<form name="formi" method="post" action="Consulta1Alum.php">

<center><h2>Consulta de Notas por Alumnos:</h2></center>
<br>


<center><?php

include 'conexion.php';

if (!$conectado)
	{
		echo 'Error Conectando';
	}
	else
	{
		$consulta =pg_query ("select * from alumnos");
		echo "Alumnos ";
		echo "<select name=\"id\">";
		while ($row=pg_fetch_array($consulta))
			{
				echo "<option value=\"".$row['id']."\">".$row['nombre']."</option>";
			}	
		echo "</select><br><br>";
		
	}
		
?></center>


<center><input type="submit" value="Filtrar por Alumno"><br><br></center>

</form>



<form name="form1" method="post" action="Consulta2Mat.php">

<center><h2>Consulta de Notas Por Materia:</h2></center>
<br>

<center><?php

	$consulta =pg_query ("select * from materias");
	echo "Materias ";
	echo "<select name=\"idmateria\">";
	while ($row=pg_fetch_array($consulta))
		{
			echo "<option value=\"".$row['idmateria']."\">".$row['materia']."</option>";
		}	
	echo "</select><br><br>";
	
	
		
?></center>

<center><input type="submit" value="Filtrar por Materia"></center>

<?php
if(!$conectado){
		echo "error:".pg_last_error();
	}else{
		echo "<h4>Conexion exitosa a la Base de Datos </h4><hr>";
		return $conectado;
	}
?>
</form>

	
</body>

</html>