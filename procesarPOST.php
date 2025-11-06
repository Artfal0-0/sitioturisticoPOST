<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Turístico Registrado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f9f9f9;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 700px;
            margin: 0 auto;
        }

        h2 {
            color: #2c3e50;
            text-align: center;
        }

        p {
            margin: 10px 0;
            line-height: 1.6;
        }

        .label {
            font-weight: bold;
            color: #34495e;
        }

        .imagen {
            margin-top: 20px;
            text-align: center;
        }

        .imagen img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>¡Sitio Turístico Registrado con Éxito!</h2>

        <?php
        // Verificar que se enviaron datos
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recoger datos del formulario
            $nombre = htmlspecialchars($_POST['nombre']);
            $descripcion = htmlspecialchars($_POST['descripcion']);
            $provincia = htmlspecialchars($_POST['provincia']);
            $tipo_turismo = htmlspecialchars($_POST['tipo_turismo']);
            $email = htmlspecialchars($_POST['email']);
            $fecha = htmlspecialchars($_POST['fecha']);

            // Servicios (checkbox) - puede haber varios
            $servicios = isset($_POST['servicios']) ? $_POST['servicios'] : [];
            $servicios_lista = is_array($servicios) ? implode(", ", array_map('htmlspecialchars', $servicios)) : "Ninguno";

            // Procesar imagen
            $imagen_nombre = "";
            $imagen_ruta = "";

            if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
                $carpeta_uploads = "uploads/";
                // Crear carpeta si no existe
                if (!is_dir($carpeta_uploads)) {
                    mkdir($carpeta_uploads, 0755, true);
                }

                $imagen_nombre = basename($_FILES['imagen']['name']);
                $imagen_ruta = $carpeta_uploads . time() . "_" . $imagen_nombre; // evitar duplicados

                // Mover archivo
                if (move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen_ruta)) {
                    // Éxito
                } else {
                    $imagen_ruta = "";
                    echo "<p style='color:red;'>Error al subir la imagen.</p>";
                }
            }

            // Mostrar datos
            echo "<p><span class='label'>Nombre:</span> $nombre</p>";
            echo "<p><span class='label'>Descripción:</span> $descripcion</p>";
            echo "<p><span class='label'>Provincia:</span> " . ucfirst($provincia) . "</p>";
            echo "<p><span class='label'>Tipo de turismo:</span> " . ucfirst($tipo_turismo) . "</p>";
            echo "<p><span class='label'>Servicios:</span> $servicios_lista</p>";
            echo "<p><span class='label'>Correo del responsable:</span> $email</p>";
            echo "<p><span class='label'>Fecha de registro:</span> $fecha</p>";

            // Mostrar imagen si se subió
            if ($imagen_ruta != "") {
                echo "<div class='imagen'>";
                echo "<p><span class='label'>Imagen:</span></p>";
                echo "<img src='$imagen_ruta' alt='Imagen de $nombre'>";
                echo "</div>";
            }
        } else {
            echo "<p style='color:red;'>No se recibieron datos.</p>";
        }
        ?>
    </div>
    <!-- boton de regresar al form -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="index.html" style="text-decoration: none; color: white; background-color: #3498db; padding: 10px 20px; border-radius: 5px;">Regresar al formulario</a>
    </div>
</body>

</html>