<?php

$numero_inputs = $_POST["numero-inputs"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe as notas</title>
    <link rel="stylesheet" href="styles-global.css">

</head>

<body>
    <form action="calcula_media_notas.php" method="post" >
        <div class="input-group" >
            <label for="">Informe as notas:</label>
             <br>
            <?php
            for ($i = 0; $i < $numero_inputs; $i++) {

                echo '<label for="">Informe as notas: '.$i.'º</label>';
                echo " <input type='number' style='margin-top: 15px;' name='nota".$i."' max='10'>";
            }
            ?>
            <br>
            <button>Enviar</button>
        </div>
    </form>
</body>

</html>