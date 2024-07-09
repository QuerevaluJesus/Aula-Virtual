<?php
// index.php

// Autoload de clases (puedes usar Composer o tu propio autoload)
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        include $file;
    }
});

// Controlador y acción por defecto
$controllerName = 'MainController';
$action = 'index';

// Si se especifica un controlador y una acción en la URL, los utilizamos
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controllerName = ucfirst($_GET['controller']) . 'Controller';
    $action = $_GET['action'];
}

// Creamos el controlador y llamamos a la acción
$controllerPath = 'controllers/' . $controllerName . '.php';
if (file_exists($controllerPath)) {
    include $controllerPath;
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            echo "Acción '$action' no encontrada en el controlador '$controllerName'.";
        }
    } else {
        echo "Clase '$controllerName' no encontrada.";
    }
} else {
    echo "Controlador '$controllerName' no encontrado.";
}
?>
