<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Alquiler de Casas</title>
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
            text-align: center;
            overflow: hidden;
            background-attachment: fixed;
        }

        .container {
            background: #ffffff;
            padding: 3rem;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-radius: 16px;
            max-width: 450px;
            width: 90%;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            color: #2c3e50;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #7f8c8d;
        }

        .buttons {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        a {
            display: inline-block;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.2);
        }

        a:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(52, 152, 219, 0.4);
        }

        a.alquilar {
            background-color: #27ae60;
            box-shadow: 0 5px 15px rgba(39, 174, 96, 0.2);
        }

        a.alquilar:hover {
            background-color: #2ecc71;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(39, 174, 96, 0.4);
        }

        /* Animación de entrada */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Bienvenido!</h1>
        <p>¿Desea consultar una casa o alquilar una casa?</p>
        <div class="buttons">
            <a href="View/consultarCasa.php">Consultar una Casa</a>
            <a href="View/alquilarCasa.php" class="alquilar">Alquilar una Casa</a>
        </div>
    </div>
</body>
</html>

