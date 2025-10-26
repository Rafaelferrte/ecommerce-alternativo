<?php
namespace App\Core;

class Controller {
    protected function model($model) {
        $modelClass = "App\\Models\\{$model}";
        return new $modelClass;
    }
    
    protected function view($view, $data = []) {
        extract($data);
        require_once BASE_PATH . "/app/views/{$view}.php";
    }
    
    protected function redirect($url) {
        header("Location: " . URL . $url);
        exit();
    }
}