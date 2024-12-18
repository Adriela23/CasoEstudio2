<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquiler de Casas</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            color: #2c3e50;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

        header {
            margin: 2rem 0;
        }

        header h1 {
            font-size: 2.5rem;
            color: #2c3e50;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
            max-width: 1200px;
            width: 100%;
            padding: 0 1rem;
        }

        .card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 300px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 1.5rem;
            text-align: left;
        }

        .card-content h2 {
            font-size: 1.5rem;
            margin: 0 0 0.5rem 0;
            color: #2c3e50;
        }

        .card-content p {
            font-size: 1rem;
            color: #7f8c8d;
            margin-bottom: 1rem;
        }

        .card-content .price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #27ae60;
            margin-bottom: 1rem;
        }

        .card-content button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
            width: 100%;
        }

        .card-content button:hover {
            background-color: #2980b9;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <header>
        <h1>Alquiler de Casas</h1>
    </header>
    
    <div class="gallery">
        <!-- Casa 1 -->
        <div class="card">
            <img src="https://terraquea.com/wp-content/uploads/2021/12/ee8be4ce43884e0089294d969bb5c684.jpg" alt="Casa en San José">
            <div class="card-content">
                <h2>Casa en San José</h2>
                <p>Hermosa casa ubicada en el corazón de San José, ideal para familias.</p>
                <div class="price">₡190,000 / mes</div>
                <a href="alquilarFormulario.php"><button>Alquilar</button></a>
            </div>
        </div>

        <!-- Casa 2 -->
        <div class="card">
            <img src="https://www.guardiapropiedades.com/files/strict_cache/300x2001casaresidencialcartagorrr.jpg" alt="Casa en Alajuela">
            <div class="card-content">
                <h2>Casa en Alajuela</h2>
                <p>Amplia casa con jardín y fácil acceso a centros comerciales.</p>
                <div class="price">₡145,000 / mes</div>
                <a href="alquilarFormulario.php"><button>Alquilar</button></a>
            </div>
        </div>

        <!-- Casa 3 -->
        <div class="card">
            <img src="https://photos.encuentra24.com/t_or_fh_m/f_auto/v1/cr/29/37/15/37/29371537_a59978" alt="Casa en Cartago">
            <div class="card-content">
                <h2>Casa en Cartago</h2>
                <p>Casa acogedora con vista a las montañas, ideal para el descanso.</p>
                <div class="price">₡115,000 / mes</div>
                <a href="alquilarFormulario.php"><button>Alquilar</button></a>
            </div>
        </div>

        <!-- Casa 4 -->
        <div class="card">
            <img src="https://photos.encuentra24.com/t_or_fh_m/f_auto/v1/cr/28/85/78/46/28857846_55ab13" alt="Casa en Heredia">
            <div class="card-content">
                <h2>Casa en Heredia</h2>
                <p>Moderna casa cerca de universidades y parques.</p>
                <div class="price">₡122,000 / mes</div>
                <a href="alquilarFormulario.php"><button>Alquilar</button></a>
            </div>
        </div>

        <!-- Casa 5 -->
        <div class="card">
            <img src="https://www.bienesonline.com/costa-rica/photos/se-vende-espaciosa-casa-amoblada-en-condominio-de-palmiro-de-carrillo-24-1896-CAV1024341721170471-816.jpg" alt="Casa en Guanacaste">
            <div class="card-content">
                <h2>Casa en Guanacaste</h2>
                <p>Casa de playa perfecta para vacaciones y relajación.</p>
                <div class="price">₡105,000 / mes</div>
                <a href="alquilarFormulario.php"><button>Alquilar</button></a>
            </div>
        </div>
    </div>
</body>
</html>
