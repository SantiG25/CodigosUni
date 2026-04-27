<html>
<head>
    <title>Conversion</title>
</head>
<body>
    <?php
    include('divisas.php');
    if(isset($_POST['calcular'])){
    $n1=$_POST['n1'];
    $op=$_POST['opciones'];
        switch($op){
            case 0: echo " $n1 Pesos argentinos equivale a Dolares ".divisas::dolar($n1);break;
            case 1: echo " $n1 Pesos argentinos equivale a Euros ".divisas::euro($n1);break;
            case 2: echo " $n1 Pesos argentinos equivale a Libras Esterlinas ".divisas::libra($n1);break;
            case 3: echo " $n1 Pesos argentinos equivale a Yen ".divisas::yen($n1);break;
        }
    }
    ?>
</body>
</html>