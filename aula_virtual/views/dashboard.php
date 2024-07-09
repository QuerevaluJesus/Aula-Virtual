<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .card {
            height: 100%;
        }
        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card-img-top {
            max-height: 150px; /* Ajusta la altura máxima de la imagen según tus necesidades */
            object-fit: cover; /* Ajusta el tamaño y recorta la imagen para que encaje */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Mi Aplicación MVC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=Main&action=index">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=Main&action=tareas">Tareas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=Main&action=evaluaciones">Evaluaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=Main&action=contenido">Contenido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=Main&action=notas">Notas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=Main&action=logout">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="my-4 text-center">Bienvenido al Dashboard</h2>
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="ruta/a/tu/imagen.jpg" class="card-img-top" alt="Imagen de Tareas">
                            <div class="card-body text-center">
                                <h5 class="card-title">Tareas</h5>
                                <a href="index.php?controller=Main&action=tareas" class="btn btn-primary">Ir a Tareas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="ruta/a/tu/imagen.jpg" class="card-img-top" alt="Imagen de Evaluaciones">
                            <div class="card-body text-center">
                                <h5 class="card-title">Evaluaciones</h5>
                                <a href="index.php?controller=Main&action=evaluaciones" class="btn btn-primary">Ir a Evaluaciones</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="ruta/a/tu/imagen.jpg" class="card-img-top" alt="Imagen de Contenido">
                            <div class="card-body text-center">
                                <h5 class="card-title">Contenido</h5>
                                <a href="index.php?controller=Main&action=contenido" class="btn btn-primary">Ir a Contenido</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="ruta/a/tu/imagen.jpg" class="card-img-top" alt="Imagen de Notas">
                            <div class="card-body text-center">
                                <h5 class="card-title">Notas</h5>
                                <a href="index.php?controller=Main&action=notas" class="btn btn-primary">Ir a Notas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer text-center mt-4">
        <p>&copy; <?php echo date('Y'); ?> Mi Aplicación MVC</p>
    </footer>
    <!-- Enlace a Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
