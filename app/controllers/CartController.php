<?php
namespace App\Controllers;

use App\Core\Controller;

class CartController extends Controller {
    
    public function __construct() {
        $this->cartModel = $this->model('Cart');
        $this->productModel = $this->model('Product');
    }
    
    public function index() {
        if (!isset($_SESSION['user_id'])) {
            $this->redirect('auth/login');
            return;
        }
        
        $cart_items = $this->cartModel->getCart($_SESSION['user_id']);
        
        $data = [
            'title' => 'Carrinho - UrbanAlternative',
            'cart_items' => $cart_items
        ];
        
        $this->view('cart/index', $data);
    }
    
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
            $product_id = $_POST['product_id'];
            $quantity = $_POST['quantity'] ?? 1;
            
            if ($this->cartModel->addToCart($_SESSION['user_id'], $product_id, $quantity)) {
                $_SESSION['success_msg'] = 'Produto adicionado ao carrinho!';
            } else {
                $_SESSION['error_msg'] = 'Erro ao adicionar produto ao carrinho.';
            }
            
            $this->redirect('cart');
        } else {
            $this->redirect('auth/login');
        }
    }
}