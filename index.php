<?php
include_once "Usuario.php";
$usuario = new Usuario();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Usuarios del Sistema</h1>
<p>
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <input type="text" name="usuario" placeholder="Ingrese nuevo usuario"/>
        <input type="submit" name="submit" value="Guardar"/>
    </form>
</p>
<?php
if (isset($_POST["submit"])) {
    $username = $_POST["usuario"];
    $usuario->guardarUsuario($username);
}
?>

<table border="1">
    <thead>
    <tr>
        <th>Nombres de Usuarios</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $resultados = $usuario->traerDatosUsuarios();
    foreach ($resultados as $item) {
        echo "<tr>
                <td>$item</td>
              </tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>