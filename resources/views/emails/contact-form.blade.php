<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container {
        width: 80%;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #333;
    }
    p {
        font-size: 16px;
        line-height: 1.5;
        color: #555;
    }
    .highlight {
        font-weight: bold;
        color: #000;
    }
</style>
<body>
    <div class="container">
        <h1>Nuevo Formulario de Contacto</h1>
        <p><span class="highlight">Nombres:</span> {{ $data['nombres'] }}</p>
        <p><span class="highlight">Apellidos:</span> {{ $data['apellidos'] }}</p>
        <p><span class="highlight">Teléfono:</span> {{ $data['telefono'] }}</p>
        <p><span class="highlight">Empresa:</span> {{ $data['empresa'] }}</p>
        <p><span class="highlight">RUC:</span> {{ $data['ruc'] }}</p>
        <p><span class="highlight">Ciudad:</span> {{ $data['ciudad'] }}</p>
        <p><span class="highlight">Correo Electrónico:</span> {{ $data['correo'] }}</p>
        <p><span class="highlight">Mensaje:</span> {{ $data['mensaje'] }}</p>
    </div>
</body>
</html>
