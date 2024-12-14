<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Casas</title>
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
            min-height: 100vh;
            flex-direction: column;
            text-align: center;
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
        <h1>Consulta de Casas Disponibles</h1>
    </header>

    <div class="gallery">
        <!-- Casa 1 -->
        <div class="card">
            <img src="https://www.julajups.cr/resources/uploads/julajups_img/marvin_bonilla_29135dccd564ab5270adc7a783bb43a7.jpg" alt="Casa en Heredia">
            <div class="card-content">
                <h2>Casa en Heredia</h2>
                <p>Casa moderna con diseño arquitectónico único. Cerca de universidades y parques, perfecta para estudiantes o profesionales jóvenes.</p>
                <div class="price">₡160,000 / mes</div>
                <a href="consultaFormulario.php"><button>Consultar</button></a>
            </div>
        </div>

        <!-- Casa 2 -->
        <div class="card">
            <img src="https://cdn.yumblin.com/images/classifieds/medium/mls-24-1643-venta-casa-desamparados-alajuela-16269-25208.webp" alt="Casa en Alajuela">
            <div class="card-content">
                <h2>Casa en Alajuela</h2>
                <p>Casa espaciosa con amplio jardín, ubicada en un vecindario tranquilo, ideal para familias. A pocos minutos del centro de la ciudad.</p>
                <div class="price">₡170,000 / mes</div>
                <a href="consultaFormulario.php"><button>Consultar</button></a>
            </div>
        </div>

        <!-- Casa 3 -->
        <div class="card">
            <img src="https://img-us-1.trovit.com/img1cr/V1mTcU1H151n/V1mTcU1H151n.1_11.jpg" alt="Casa en Guanacaste">
            <div class="card-content">
                <h2>Casa en Guanacaste</h2>
                <p>Casa de lujo ubicada cerca de la playa, ideal para quienes buscan relajación y vacaciones permanentes en un ambiente natural.</p>
                <div class="price">₡132,000 / mes</div>
                <a href="consultaFormulario.php"><button>Consultar</button></a>
            </div>
        </div>

        <!-- Casa 4 -->
        <div class="card">
            <img src="https://photos.encuentra24.com/t_or_fh_m/f_auto/v1/cr/25/14/29/20/25142920_969250" alt="Casa en San José">
            <div class="card-content">
                <h2>Casa en San José</h2>
                <p>Moderna casa ubicada en una de las zonas más exclusivas de San José, con vistas a la ciudad y acceso cercano a escuelas y centros comerciales.</p>
                <div class="price">₡178,000 / mes</div>
                <a href="consultaFormulario.php"><button>Consultar</button></a>
            </div>
        </div>

        <!-- Casa 5 -->
        <div class="card">
            <img src="https://www.bienesonline.com/costa-rica/photos/venta-de-casa-en-cartago-20-1243-CAV370291611623681-977.jpg" alt="Casa en Cartago">
            <div class="card-content">
                <h2>Casa en Cartago</h2>
                <p>Casa con un estilo rústico y amplio jardín, ideal para quienes buscan tranquilidad y estar cerca de la naturaleza.</p>
                <div class="price">₡135,000 / mes</div>
                <a href="consultaFormulario.php"><button>Consultar</button></a>
            </div>
        </div>

        <!-- Casa 6 (Nueva casa añadida) -->
        <div class="card">
            <img src="https://img-us-1.trovit.com/img1cr/1i1612M1s1p1IK/1i1612M1s1p1IK.1_11.jpg" alt="Casa en Puntarenas">
            <div class="card-content">
                <h2>Casa en Puntarenas</h2>
                <p>Preciosa casa frente al mar, ideal para vacaciones o una residencia permanente cerca de la playa.</p>
                <div class="price">₡280,000 / mes</div>
                <a href="consultaFormulario.php"><button>Consultar</button></a>
            </div>
        </div>
    </div>

</body>
</html>
