<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de Contacto</title>
</head>
<body>
    <h1>Nuevo mensaje de contacto</h1>
    <p><strong>Nombre:</strong> {{ $nombre }} {{ $apellido }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Asunto:</strong> {{ $asunto }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $mensaje }}</p>
</body>
</html>
