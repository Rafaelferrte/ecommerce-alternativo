<?php
session_start();

// Define o caminho base
define('BASE_PATH', dirname(__DIR__));

// Carrega as configurações
require_once BASE_PATH . '/app/config/config.php';

// Carrega o autoload do Composer
require_once BASE_PATH . '/vendor/autoload.php';

use App\Core\App;

$app = new App();