<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    
    public function index() {
        $data = [
            'title' => 'Moda Alternativa - Sua Loja de Roupas Diferentes'
        ];
        
        $this->view('home/index', $data);
    }
}