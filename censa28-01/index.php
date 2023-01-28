<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FORM</title>


</head>

<body>

    <form method="Post" action="proceso.php" onsubmit="return validar ();">

        <table bgcolor="FDEDEC" align="center">

            <tr>
                <h2 align="center">Formulario de Validación PHP</h2>
            <tr>

            <tr>
                <td> Nombre: <input type="text" id="nombre" name="nombre"> </td>
            </tr>

            <tr>
                <td> Correo: <input type="email" id="correo" name="correo"> </td><br>
            </tr>

            <tr>
                <td> Website: <input type="text" id="web" name="web"> </td><br>
            </tr>

            <tr>
                <td>comentario: <textarea id="comentario" name="comentario"></textarea></td><br>

            </tr>

            <tr>
                <td> Género:
                    <input type="radio" id="femenino" name="sexo" value="Femenino">Femenino.
                    <input type="radio" id="masculino" name="sexo" value="masculino">Masculino.
                </td>

            </tr>

            <tr>
                <td><input type="submit" value="Enviar"></td><br>
                <td><input type="reset" value="Borrar"></td><br>
            </tr>

            <tr>
                <td id="textoExterno">
                    <object type="text/plain" data="archivo.txt"></object>


                </td>

            </tr>

        </table>

    </form>


    <script src="validar.js"></script>

</body>

</html>