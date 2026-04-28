<html>
<head>
<title>Programacion III</title>
</head>

<body>


<?php

include 'conexion.php';

$nombre=$_REQUEST['nombre'];
$materia=$_REQUEST['materia'];
$nota=$_REQUEST['nota'];
$observacion=$_REQUEST['observaciones'];



$sql="SELECT * FROM nota WHERE idalumno= '$nombre' and idmateria='$materia' and observaciones='$observacion'";
$resultado=pg_query($sql);		
$numero = pg_num_rows($resultado);
if ($numero==0)
	{


		if (!$conectado){
		echo 'Error Conectando';
						}
		else
			{
		   
		  $sql="INSERT INTO nota (idalumno, idmateria, nota, observaciones) VALUES('$nombre', '$materia', '$nota', '$observacion')";
		  $resultado=pg_query($sql);						
	
			

			echo '<table border=2><tr style="border-color:#000000; border-style:solid; border-with:3px;" align="center" bgcolor="#GG9000"><td>Nombre</td><td>Materia</td><td>Nota</td><td>Observacion</td></tr>';			
			
			$sql="SELECT a.nombre, m.materia, n.nota, n.observaciones FROM alumnos a, materias m, notas n where a.nombre = n.idalumno and m.id = n.idmateria";
			$resultado=pg_query($sql);
	

			while($row=pg_fetch_array($resultado)){
			echo '<tr align="center"><tr style="border-color:#000000; border-style:solid; border-with:2px;"><td>'.$row['nombre'].'</td><td>'.$row['email'].'</td><td>'.$row['materia'].'</td><td>'.$row['nota'].'</td><td>'.$row['observaciones'].'</td></tr>';
												  }			

		   }
			echo '</table>';
	}
		else
		{
		echo"<script type=\"text/javascript\"> 
		alert('Ya existe se ha cargado la nota para el alumno y la materia seleccionada');
		window.location=\"Notas1.php\"; 
		</script>"; 
		}

		  pg_close($conectado);
		  
		  
		  ?>	              

		  
		  </body>

</html>