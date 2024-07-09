<!-- views/notas.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas del Estudiante</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .table-container {
            margin-top: 20px;
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
        <div class="table-container">
            <h2 class="text-center my-4">Notas del Estudiante</h2>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Grado</th>
                        <th>Sección</th>
                        <th>Matemática</th>
                        <th>Comunicación</th>
                        <th>Inglés</th>
                        <th>Religión</th>
                        <th>Física</th>
                        <th>Química</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($estudiante) && isset($notas)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($estudiante['nombre'] . ' ' . $estudiante['apellido']); ?></td>
                            <td><?php echo htmlspecialchars($estudiante['grado']); ?></td>
                            <td><?php echo htmlspecialchars($estudiante['seccion']); ?></td>
                            <td><?php echo htmlspecialchars($notas['matematica']); ?></td>
                            <td><?php echo htmlspecialchars($notas['comunicacion']); ?></td>
                            <td><?php echo htmlspecialchars($notas['ingles']); ?></td>
                            <td><?php echo htmlspecialchars($notas['religion']); ?></td>
                            <td><?php echo htmlspecialchars($notas['fisica']); ?></td>
                            <td><?php echo htmlspecialchars($notas['quimica']); ?></td>
                        </tr>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="text-center">No se encontraron notas para este estudiante.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
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
