<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="estilowiki.css">
<link href="">
</head>
<body>
    <div class="box">
    <div class="tercer_contenedor">   

    <?php
    $datos = array ("dni" => $_REQUEST['dni'],
    "nombre" => $_REQUEST['nombre'],
    "apellido" => $_REQUEST['apellido'],
    "domicilio" => $_REQUEST['domicilio'],
    "telefono" => $_REQUEST['telefono']
    );


    $servicios = array ("luz" => $_REQUEST['luz'],
    "agua" => $_REQUEST['agua'],
    "alquiler" => $_REQUEST['alquiler'],
    "telefonia" => $_REQUEST['telefonia'],
    "internet" => $_REQUEST['internet']
    );
?>
</div>
<div class="sexto_contenedor">
        <?php
      echo "<h2>Los Datos Personales son:</h2>
      <h2>Nombre: ".$datos["nombre"]."</h2>
      <h2>Apellido: ".$datos["apellido"]."</h2>
      <h2>DNI: ".$datos["dni"]."</h2>
      <h2>Domicilio: ".$datos["domicilio"]."</h2>
      <h2>Telefono: ".$datos["telefono"];
        ?>
</div>

<div class="cuarto_contenedor">
    <h2>
        <?php
        echo "<h2>Los servicios son:</h2>
        <h2>Luz: ".$servicios["luz"]."</h2>
        <h2>Agua: ".$servicios["agua"]."</h2>
        <h2>Alquiler: ".$servicios["alquiler"]."</h2>
        <h2>Internet: ".$servicios["internet"]."</h2>
        <h2>Telefonia: ".$servicios["telefonia"];
        ?>
    </h2>
    </div>
</div>
<div class="boxtotal">
    <div class="resultados"><br> 
        <h1>Gastos Totales
            <?php
            $total = $servicios["luz"] + $servicios["agua"] + $servicios["alquiler"] + $servicios["telefonia"] + $servicios["internet"];
            echo "<h2>El Total de los Impuestos es: $ $total</h2>";
            ?>
        </h2>
    </div>
    </div>
    
    <div class="boxresults">
    <div class="tercer_contenedor">
        Nombre: Santiago Daniel Gaetan <br>
        Matricula: EISI364 <br>
        Carrera: Ingenieria en Sistemas De Informacion.
    </div>
</div>
</body>
</body>
</html>