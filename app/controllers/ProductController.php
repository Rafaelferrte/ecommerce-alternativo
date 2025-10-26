<?php
namespace App\Controllers;

use App\Core\Controller;

class ProductController extends Controller {
    
    public function __construct() {
        $this->productModel = $this->model('Product');
    }
    
    public function show($id) {
        $product = $this->productModel->getById($id);
        
        if (!$product) {
            $this->view('errors/404');
            return;
        }
        
        $data = [
            'title' => $product->name,
            'product' => $product
        ];
        
        $this->view('products/show', $data);
    }
    
    public function category($category_id, $page = 1) {
        $products = $this->productModel->getByCategory($category_id, $page);
        
        $data = [
            'title' => 'Categoria',
            'products' => $products,
            'currentPage' => $page
        ];
        
        $this->view('products/category', $data);
    }
    
    public function search($page = 1) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $term = trim($_POST['search']);
            $products = $this->productModel->search($term, $page);
            
            $data = [
                'title' => 'Busca: ' . $term,
                'products' => $products,
                'searchTerm' => $term,
                'currentPage' => $page
            ];
            
            $this->view('products/search', $data);
        } else {
            $this->redirect('');
        }
    }
}