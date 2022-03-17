<?php
include "global/conexion.php";
if (isset($_POST['guardar'])){
    if (strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['correo']) >= 1 && 
    strlen($_POST['numero']) >= 1 ){
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $numero = trim($_POST['numero']);
        $check = getimagesize($_FILES['imagen']['tmp_name']);
        if($check != false){
    
        $imagen = $_FILES['imagen']['tmp_name'];
        $imgcontenido = addslashes(file_get_contents($imagen));
        }



        $consulta = $pdo->prepare("INSERT INTO datos(nombre, correo, numero, imagen) VALUES ('$nombre','$correo','$numero','$imgcontenido')");
        $consulta->execute();
        if($consulta){
            ?>
            <script>
                alert("Se han guardado los datos correctamente")
            </script>
            <?php
        }else{
            ?>
            <script>
            alert("No se han podido guardar los datos disculpe");
            </script>
            <?php
        }
        
    }
}
else{
    ?>
    <script>
        alert("Por favor rellene todos los datos ");
    </script>
    <?php
}



?>