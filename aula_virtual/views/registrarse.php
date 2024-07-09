<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .form-container {
            margin-top: 50px;
        }
        .form-header {
            margin-bottom: 30px;
        }
        .form-footer {
            margin-top: 30px;
            text-align: center;
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
                        <a class="nav-link" href="index.php?controller=Main&action=login">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=Main&action=register">Registrarse</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container form-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center form-header">
                        <h2><?php echo $title; ?></h2>
                    </div>
                    <div class="card-body">
                        <form action="index.php?controller=Main&action=saveUser" method="POST">
                            <div class="form-group">
                                <label for="dni">DNI:</label>
                                <input type="text" class="form-control" id="dni" name="dni" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo electrónico:</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div class="form-group">
                                <label for="grado">Grado:</label>
                                <input type="text" class="form-control" id="grado" name="grado" required>
                            </div>
                            <div class="form-group">
                                <label for="seccion">Sección:</label>
                                <input type="text" class="form-control" id="seccion" name="seccion" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer form-footer">
        <p>&copy; <?php echo date('Y'); ?> Mi Aplicación MVC</p>
    </footer>
    <!-- Enlace a Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
