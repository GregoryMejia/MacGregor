<?php

    session_start();
    $figura = $_POST['figura'];

    $resultado = 0;
    switch ($figura) {

        case 'triangulo':
            $altura = $_POST['altura'];
            $base = $_POST['base'];
            $resultado = ($base * $altura);
            break;
    }

    $_SESSION['resultado'] = $resultado;

    header("Location: ejercicio-2.php" );

