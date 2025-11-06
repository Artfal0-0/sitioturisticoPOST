<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Sitios Turísticos de Ecuador</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
    }

    h2 {
        color: #2c3e50;
    }

    form {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .title {
        font-weight: bold;
    }

    .texto,
    select,
    textarea {
        width: 100%;
        padding: 8px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .button {
        background-color: #3498db;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 10px;
    }

    .button:hover {
        background-color: #2980b9;
    }
</style>

<body>

    <h2>Registro de Sitios Turísticos de Ecuador</h2>

    <form method="post" enctype="multipart/form-data">

        <!-- Nombre del sitio turístico  -->
        <label class="title" for="nombre">Nombre del sitio turístico <span style="color:red;">*</span>:</label><br>
        <input class="texto" type="text" id="nombre" name="nombre" required placeholder="Ej: Mitad del Mundo"><br><br>

        <!-- Descripción (textarea) -->
        <label class="title" for="descripcion">Descripción del sitio turístico <span style="color:red;">*</span>:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required placeholder="Breve reseña histórica o características del lugar."></textarea><br><br>

        <!-- Provincia (select) -->
        <label class="title" for="provincia">Provincia <span style="color:red;">*</span>:</label><br>
        <select id="provincia" name="provincia" required>
            <option value="" disabled selected>Seleccione una provincia</option>
            <option value="pichincha">Pichincha</option>
            <option value="cotopaxi">Cotopaxi</option>
            <option value="tungurahua">Tungurahua</option>
            <option value="imbabura">Imbabura</option>
            <option value="loja">Loja</option>
            <option value="azuay">Azuay</option>
            <option value="manabi">Manabí</option>
            <option value="esmeraldas">Esmeraldas</option>
            <option value="guayas">Guayas</option>
            <option value="eloro">El Oro</option>
        </select><br><br>

        <!-- Tipo de turismo (radio) -->
        <label class="title">Tipo de turismo <span style="color:red;">*</span>:</label><br>
        <input type="radio" id="natural" name="tipo_turismo" value="natural" required>
        <label for="natural">Natural</label><br>

        <input type="radio" id="cultural" name="tipo_turismo" value="cultural" required>
        <label for="cultural">Cultural</label><br>

        <input type="radio" id="aventura" name="tipo_turismo" value="aventura" required>
        <label for="aventura">Aventura</label><br>

        <input type="radio" id="gastronomico" name="tipo_turismo" value="gastronomico" required>
        <label for="gastronomico">Gastronómico</label><br><br>

        <!-- Servicios disponibles (checkbox) -->
        <label class="title">Servicios disponibles <span style="color:red;">*</span> (seleccione al menos uno):</label><br>
        <input type="checkbox" id="guia" name="servicios" value="guia">
        <label for="guia">Guía turística</label><br>

        <input type="checkbox" id="hospedaje" name="servicios" value="hospedaje">
        <label for="hospedaje">Hospedaje</label><br>

        <input type="checkbox" id="alimentacion" name="servicios" value="alimentacion">
        <label for="alimentacion">Alimentación</label><br>

        <input type="checkbox" id="transporte" name="servicios" value="transporte">
        <label for="transporte">Transporte</label><br><br>

        <!-- Imagen (file) -->
        <label class="title" for="imagen">Imagen representativa del sitio turístico <span style="color:red;">*</span>:</label><br>
        <input type="file" id="imagen" name="imagen" accept="image/*" required><br><br>

        <!-- Correo electrónico (email) -->
        <label class="title" for="email">Correo electrónico del responsable <span style="color:red;">*</span>:</label><br>
        <input class="texto" type="email" id="email" name="email" required placeholder="ejemplo@dominio.com"><br><br>

        <!-- Fecha de registro (date) -->
        <label class="title" for="fecha">Fecha de registro <span style="color:red;">*</span>:</label><br>
        <input class="texto" type="date" id="fecha" name="fecha" required><br><br>

        <!-- Botones de envío y limpieza -->
        <input class="button" type="submit" value="Registrar Sitio">
        <input class="button" type="reset" value="Limpiar Formulario">

    </form>

</body>

</html>