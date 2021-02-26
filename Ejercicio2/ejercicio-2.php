<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calcular el area de las figuras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="tratamiento-datos.php" method="post">
        <input type="radio" name="figura" value="circulo" checked>Esfera<br/>
        <input type="radio" name="figura" value="cuadrado">Cubo<br/>
        <input type="radio" name="figura" value="triangulo">Cilindro<br/>
        <br/>
        <label for="base">Base</label>
        <input type="number" id="base" name="base" />
        <br/>
        <label for="base">Altura</label>
        <input type="number" id="altura" name="altura" />
        <br/>
        <input type="submit">

    </form>

    <?php
        session_start();
        if(isset($_SESSION['resultado'])){
            echo 'El Area es ' . $_SESSION['resultado'];
            unset($_SESSION['resultado']);
        }

    
    ?>

</body>
</html>