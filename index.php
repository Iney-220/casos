<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Encuesta de Inseguridad</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <form method="POST" action="pregunta1.php">
            <table border="1" width="700" cellspacing="10" cellpadding="0">
                <tr>
                    <td>Nombres y apellidos</td>
                    <td><input type="text" name="txtNombres" size="50" required /></td>
                </tr>
                <tr>
                    <td>Número DNI</td>
                    <td><input type="text" name="txtDNI" size="30" maxlength="8" pattern="[0-9]{8}" required /></td>
                </tr>
                <tr>
                    <td>Empezar con la encuesta &gt;&gt;</td>
                    <td><input type="submit" value="Encuesta" /></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <?php include 'pie.php'; ?>
    </footer>
</body>
</html>