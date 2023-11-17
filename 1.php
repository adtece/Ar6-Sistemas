<!DOCTYPE html>
<html>
<head>
</head>
<body>   
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {    

    $puntos = [];
    function calculaPuntos($puntos){
        $empate = 1;
        $gana = 2;
        $em = $empate + $_POST["emp"];
        $ga = $gana * $_POST["gan"];
        $suma = $em + $ga;
        array_push($puntos, $suma);
        return $puntos;
    }
   
    $resultado = calculaPuntos($puntos);
    var_dump($resultado);
}

    ?>
   
    <form method="POST">
        <label for="gan">Partidos ganados</label>
        <input type="number" id="gan" name="gan" value="">
        <br>
        <label for="per">Partidos perdidos</label>
        <input type="number" id="per" name="per" value="">
        <br>
        <label for="emp">Partidos empatados</label>
        <input type="number" id="emp" name="emp" value="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>