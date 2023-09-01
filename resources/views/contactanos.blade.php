<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactanos</title>
</head>

<body>
    <h1>Formulario de contacto</h1>
    <form method="POST" action="api/contact">
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" required><br>

        <label for="correo">Correo:</label><br>
        <input type="email" name="correo" required><br>

        <label for="asunto">Asunto:</label><br>
        <input type="text" name="asunto" required><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea name="mensaje" rows="4" required></textarea><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
