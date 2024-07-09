<?php
// controllers/MainController.php

class MainController {
    public function index() {
        $data = [
            'title' => 'Bienvenido a la Página Principal',
            'content' => 'Este es el contenido de la página principal.'
        ];
        $this->loadView('main', $data);
    }

    public function login() {
        $data = [
            'title' => 'Iniciar Sesión'
        ];
        $this->loadView('iniciar_sesion', $data);
    }

    public function register() {
        $data = [
            'title' => 'Registrarse'
        ];
        $this->loadView('registrarse', $data);
    }

    private function loadView($viewName, $data = []) {
        extract($data);
        include 'views/' . $viewName . '.php';
    }

    public function saveUser() {
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $grado = $_POST['grado'];
        $seccion = $_POST['seccion'];

        require_once 'model/EstudianteModel.php';
        $estudianteModel = new EstudianteModel();
        $result = $estudianteModel->save($dni, $nombre, $apellido, $correo, $grado, $seccion);

        if ($result) {
            header('Location: index.php?controller=Main&action=success');
        } else {
            header('Location: index.php?controller=Main&action=error');
        }
    }

    public function success() {
        $title = "Registro Exitoso";
        $message = "¡El registro se ha realizado con éxito!";
        include 'views/mensaje.php';
    }

    public function error() {
        $title = "Error en el Registro";
        $message = "No se ha podido realizar el registro. Por favor, inténtalo nuevamente.";
        include 'views/mensaje.php';
    }

    public function dashboard() {
        $title = "Dashboard";
        require 'views/dashboard.php';
    }

    public function tareas()
    {
        include_once 'views/tareas.php';
    }

    public function evaluaciones()
    {
        include_once 'views/evaluaciones.php';
    }

    public function contenido()
    {
        include_once 'views/contenido.php';
    }

    public function notas()
    {
        include_once 'views/notas.php';
    }

    public function logout()
    {
        // Aquí realizas la lógica para cerrar sesión
        session_destroy(); // Cierra la sesión actual del usuario

        // Redirecciona al usuario al inicio del sistema
        header('Location: index.php?controller=Main&action=index');
        exit; // Asegura que el script se detenga después de la redirección
    }

    public function notas_view() {
        // Obtener el DNI del estudiante desde la URL o la sesión (ajustar según sea necesario)
        $dni = isset($_GET['dni']) ? $_GET['dni'] : null;

        // Verificar que el DNI no esté vacío
        if (!$dni) {
            die("DNI no proporcionado.");
        }
        
        // Conectar a la base de datos y obtener los datos del estudiante y sus notas
        $conexion = new mysqli('localhost', 'root', '', 'aula_virtual');
        
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        $estudianteQuery = $conexion->prepare("SELECT * FROM estudiante WHERE dni = ?");
        $estudianteQuery->bind_param('s', $dni);
        $estudianteQuery->execute();
        $estudianteResult = $estudianteQuery->get_result();
        $estudiante = $estudianteResult->fetch_assoc();

        $notasQuery = $conexion->prepare("SELECT * FROM notas_estudiante WHERE dni = ?");
        $notasQuery->bind_param('s', $dni);
        $notasQuery->execute();
        $notasResult = $notasQuery->get_result();
        $notas = $notasResult->fetch_assoc();

        include 'views/notas.php';

        $estudianteQuery->close();
        $notasQuery->close();
        $conexion->close();
    }
    
}
?>
