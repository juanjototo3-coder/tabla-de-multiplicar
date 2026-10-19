
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>

    <style>
        body {
            background-color: blue;
            color: white;
            text-align: center;
            font-family: "Times New Roman";
        }

        h1 {
            font-size: 42px;
        }

        .contenedor {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
        }

        .tabla {
            background-color: black;
            border: 4px solid white;
            width: 160px;
            padding: 5px;
            box-sizing: border-box;
            font-size: 23px;
            line-height: 1.35;
        }
    </style>
</head>

<body>

    <h1>Tabla de multiplicar</h1>

    <div class="contenedor">

        <?php
        for ($i = 1; $i <= 10; $i++) {

            echo '<div class="tabla">';

            for ($j = 1; $j <= 10; $j++) {

                $resultado = $i * $j;

                echo "$i x $j = $resultado<br>";
            }

            echo '</div>';
        }
        ?>

    </div>

</body>
</html>