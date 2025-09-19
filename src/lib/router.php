<?php

use AppTask\App\Lib\Controller;
use \Bramus\Router\Router;

$router = new Router();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../config/");
$dotenv->load();

class router_app 
{

    private $router;
    private $r;

    public function __construct($router)
    {
        $this->router = $router;
        $this->r = new Controller();
    }

    public function rutas()
    {
    // rutas generales sin autenticacion.
    // nota: estas rutas no incluyen las vistas/template de la aplicacion.
    $this->router->get('/', function(){ $this->r->render('login',['title'=>'Login Page','page'=>'login']); });

    // Definir las rutas de la aplicacion para las vistas
    $this->router->get('/home', function(){ $this->r->render_page('section.home',['title'=>'Home Page','page'=>'home']); });
    $this->router->get('/tareas', function(){ $this->r->render_page('section.task',['title'=>'Tareas','page'=>'task']); });
    $this->router->get('/calendario', function(){ $this->r->render_page('section.calender',['title'=>'Calendario','page'=>'calender']); });
    $this->router->get('/equipo', function(){ $this->r->render_page('section.team',['title'=>'Equipo','page'=>'team']); });
        
    // Definir las rutas de la aplicacion para las api


    // template 
    $this->router->get('/botones', function(){ $this->r->render_page('plantilla/section.button',['title'=>'Botones','page'=>'botones']); });
    $this->router->get('/ventanas', function(){ $this->r->render_page('plantilla/section.window',['title'=>'Ventanas','page'=>'ventanas']); });
    $this->router->get('/formularios', function(){ $this->r->render_page('plantilla/section.form',['title'=>'Formularios','page'=>'formularios']); });
    
    }
}

$app = new router_app($router);
$app->rutas();
$router->run();