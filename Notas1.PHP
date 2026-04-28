<html>

<head>

<title>Programacion III</title>

</head>

<body>


<form name="formi" method="post" action="Notas2.php">

Notas de Alumnos:
<br><br>


<?php

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
		
		$consulta =pg_query ("select * from materias");
		echo "Materias ";
		echo "<select name=\"id\">";
		while ($row=pg_fetch_array($consulta))
			{
				echo "<option value=\"".$row['id']."\">".$row['materia']."</option>";
			}	
		echo "</select><br><br>";		
		
	}
		
?>

Escriba la Nota:

<input type="text" name="nota" size="3">
<br><br>

Indique el parcial

<select name="observacion">
	<option value="Primer Parcial">Primer Parcial</option>
	<option value="Segundo Parcial">Segundo Parcial</option>
	<option value="Recuperatorio">Rcuperatorio</option>
	<option value="Final">Final</option>
</select>
<br><br>

<input type="submit" value="Mostrar">

</form>

	
</body>

</html>