<?php
namespace Core;
require_once __DIR__.'/../App/controller/HomeController.php';
use App\Controller\HomeController;

class Routes {
    private $listWhite;

    public function __construct() {
        // Iniciar la sesión
        $this->getUrl();
    }

    public function getUrl() {
        // Definir las vistas permitidas solo para usuarios autenticados
        $this->listWhite = array(
            'price', 'start-info', 'start-test', 'end-test', 'preview-test'
        );

        $controller = new HomeController();

        // Si no hay vista, mostrar la página principal
        if (!isset($_GET['views'])) {
            call_user_func(array($controller, 'view_home'));
        } else {
            $views = $_GET['views'];

            // Verificar si la vista está permitida
            if (in_array($views, $this->listWhite)) {
                $method = str_replace('-', '_', $views);  // Convertir guiones a guiones bajos para métodos
                if (method_exists($controller, $method)) {
                    // Llamar al método del controlador correspondiente
                    call_user_func(array($controller, $method));                    
                } else {
                    // Si el método no existe, redirigir a la vista principal
                    call_user_func(array($controller, 'view_home'));
                }
            } else {
                // Si la vista no está en la lista blanca, redirigir a la vista principal
                call_user_func(array($controller, 'view_home'));
            }
        }
    }
}
