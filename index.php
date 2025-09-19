<?php

// Configurar zona horaria para Caracas, Venezuela
date_default_timezone_set('America/Caracas');
// setlocale(LC_TIME, "es_VE.UTF8", "esp");

error_reporting(E_ALL);

ini_set('ignore_repeated_errors', TRUE);

ini_set('display_errors', FALSE);

ini_set('log_errors', TRUE);

ini_set('error_log', 'src/storage/logs/errors.log');
error_log(" - - - - - - - - - LOG DE LA APLICACION - - - - - - - - - !");

require "vendor/autoload.php";
require "src/lib/router.php";