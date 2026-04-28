<html>

<head>

<title>Primera Pagina</title>

<style type="text/css">
<!--
table {
		border-width:4px;
		border-color:#000000;
		border-style:solid;
}
td {
	font-size: 19px;
	border-width:3px;
	border-color:#000000;
	border-style:solid;
	text-align: center;	
}

-->
</style>




</head>

<body>

<center><?php

$id = $_REQUEST['id'];

include 'conexion.php';

if (!$conectado)
	{
		echo "Error en la Conexion";
	}
	else
	{
		$sql = "SELECT a.nombre, a.dni, m.materia, m.año , n.nota, n.observaciones FROM alumnos a, materias m, nota n where m.idmateria=n.idmateria and a.id='$id'";
		$resultado = pg_query($sql);
		
		echo '<h2>Materia y Nota del alumno seleccionado:</h2><br>';
		echo '<table><tr bgcolor="#GG9000"><td>Nombre</td><td>Documento</td><td>Materia</td><td>Nota</td><td>Año</td><td>Examen</td></tr>';
		
		while($row = pg_fetch_array($resultado))
		{
			echo '<tr><td>'.$row['nombre'].'</td><td>'.$row['dni'].'</td><td>'.$row['materia'].'</td><td>'.$row['nota'].'</td><td>'.$row['año'].'</td><td>'.$row['observaciones'].'</td></tr>';
		}
		
		echo '</table>';
		
	}	
		pg_close($conectado);
	

	?></center>
	
</body>

</html>