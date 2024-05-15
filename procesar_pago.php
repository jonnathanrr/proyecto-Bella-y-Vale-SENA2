<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago en Línea PSE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .code-button {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .code-button button {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .code-button button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Pago en Línea PSE</h1>
    <form action="procesar_pago.php" method="POST">
        <label for="monto">Monto a Pagar:</label>
        <input type="text" name="monto" id="monto" required><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required><br>
        <!-- Otros campos requeridos -->
        <button type="submit">Pagar</button>
    </form>
    
    <!-- Botón para ir al código de procesamiento -->
    <div class="code-button">
        <a href="procesar_pago.php" target="_blank">
            <button>Ver Código de Procesamiento</button>
        </a>
    </div>
</body>
</html>
