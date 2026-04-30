<?php include("conexion.php"); ?>

<h2>Nuevo Envío</h2>

<form method="POST">
    Código: <input type="text" name="codigo"><br>
    Descripción: <input type="text" name="descripcion"><br>
    Destino: <input type="text" name="destino"><br>
    <button type="submit" name="guardar">Guardar</button>
</form>

<?php
if (isset($_POST['guardar'])) {
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $destino = $_POST['destino'];

    $sql = "INSERT INTO envios (codigo, descripcion, destino)
            VALUES ('$codigo', '$descripcion', '$destino')";

    $conn->query($sql);

    header("Location: index.php");
}
?>