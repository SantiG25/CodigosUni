<html>

<head>

<title>Segunda Pagina</title>

<style type="text/css">
<!--
table {
		border-width:5px;
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

$id = $_REQUEST['idmateria'];

include 'conexion.php';

if (!$conectado)
	{
		echo "Error en la Conexion";
	}
	else
	{
		$sql = "SELECT a.nombre, a.dni, m.materia, m.año, n.nota, n.observaciones FROM alumnos a, materias m, nota n where m.idmateria=n.idmateria and n.idmateria='$id' ";
		$resultado = pg_query($sql);
		
		echo '<h2>Orden por materia elegida:</h2><br>';
		echo '<table><tr bgcolor="#GG9000"><td>Nombre</td><td>Documento</td><td>Materia</td><td>Nota</td><td>Observaciones</td><td>Nota</td><td>Observaciones</td></tr>';
		
		while($row = pg_fetch_array($resultado))
		{
			echo '<tr><td>'.$row['nombre'].'</td><td>'.$row['dni'].'</td><td>'.$row['materia'].'</td><td>'.$row['nota'].'</td><td>'.$row['observaciones'].'</td></tr>';
		}
		
		echo '</table>';
		
	}	
		pg_close($conectado);
	

	?></center>
	
</body>

</html>