<?php 

namespace AppTask\App\Lib;

use AppTask\App\Lib\View;

class Controller 
{
    // Aquí puedes agregar métodos comunes para todos los controladores

    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function render($view, $data = [])
    {
        $this->view->render($view, $data);
    }

    public function render_page($view, $data = [])
    {
        $this->view->render_page($view, $data);
    }

    protected function post(string $param)
    {
        if(!isset($_POST[$param])) return null; 
        return $_POST[$param];
    }

    protected function get(string $param)
    {
        if(!isset($_GET[$param])) return null; 
        return $_GET[$param];
    }

    protected function file(string $param)
    {
        if(!isset($_FILES[$param])) return null; 
        return $_FILES[$param];
    }
}