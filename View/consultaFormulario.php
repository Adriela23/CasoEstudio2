<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Consulta de Casa</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            color: #2c3e50;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .form-container {
            background: #ffffff;
            padding: 2rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 16px;
            width: 100%;
            max-width: 500px;
            text-align: left;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        label {
            display: block;
            margin: 1rem 0 0.5rem;
            font-size: 1rem;
            color: #7f8c8d;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        select {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        button {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            width: 100%;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2ecc71;
        }

        .message {
            margin-top: 1.5rem;
            font-size: 1rem;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Consulta sobre la Casa</h1>
        <!-- Aquí se cambia la acción del formulario para que envíe los datos a procesar_consulta.php -->
        <form action="procesar_consulta.php" method="POST">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" required placeholder="Ingrese su nombre">

            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required placeholder="Ingrese su correo electrónico">

            <label for="consulta">¿Qué desea consultar?</label>
            <select id="consulta" name="consulta" required>
                <option value="informacion">Información sobre la casa</option>
                <option value="disponibilidad">Disponibilidad de la casa</option>
                <option value="mensaje">Enviar un mensaje</option>
            </select>

            <label for="message">Mensaje</label>
            <textarea id="message" name="message" rows="4" required placeholder="Escriba su mensaje aquí..."></textarea>

            <button type="submit">Enviar Consulta</button>
        </form>
        <p class="message">Recibirá una respuesta a su consulta lo antes posible.</p>
    </div>
</body>
</html>
