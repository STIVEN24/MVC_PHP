<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__FILE__)).DS);
define("URL", "http://localhost/MVC_Prueba1/");

require_once "config/autoload.php";
config\autoload::run();
require_once "public/templates/layout/main.php";
config\enrutador::run(new config\request());