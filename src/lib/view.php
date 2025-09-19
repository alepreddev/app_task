<?php

namespace AppTask\App\Lib;

class View
{
    // La funcion render() se utiliza para renderizar vistas simples sin el layout completo
    function render(string $view, array $data = [])
    {
        extract($data);
        require_once "views/pages/$view.php";
    }   

    // La funcion render_page() se utiliza para renderizar vistas completas con el layout
    function render_page(string $view, array $data = [])
    {
        extract($data);

        require_once 'views/layouts/pageConfig.php';

        // Incluir el sidebar (si es necesario y existe)
        if (file_exists('views/layouts/Sidebar.php'))
        {
            require_once 'views/layouts/Sidebar.php';
        }
        //Incluir el header
        require_once 'views/layouts/Header.php';
        
        // Se verifica si el archivo de la vista existe
        if (file_exists("views/sections/$view.php"))
            {
            // Incluir el contenido específico de la página
            require_once "views/sections/$view.php";
        } 
        else 
        {
            // Manejo de error para página no encontrada
            require_once 'views/sections/404.php';
        }

        // Incluir el footer
        require_once 'views/layouts/Footer.php';
        //require "src/views/{$view}.php";
    }
}