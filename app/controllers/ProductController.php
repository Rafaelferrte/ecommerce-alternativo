<?php
namespace App\Controllers;

use App\Core\Controller;

class ProductController extends Controller {
    
    public function __construct() {
        $this->productModel = $this->model('Product');
    }
    
    public function show($slug) {
        $product = $this->productModel->getBySlug($slug);
        
        if (!$product) {
            $this->view('errors/404');
            return;
        }
        
        $data = [
            'title' => $product->name . ' - UrbanAlternative',
            'product' => $product
        ];
        
        $this->view('products/show', $data);
    }
    
    public function category($slug) {
        $products = $this->productModel->getByCategory($slug);
        $categories = $this->productModel->getCategories();
        
        $data = [
            'title' => 'Categoria - UrbanAlternative',
            'products' => $products,
            'categories' => $categories,
            'current_category' => $slug
        ];
        
        $this->view('products/category', $data);
    }
    
    public function search() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $term = trim($_POST['search']);
            $products = $this->productModel->search($term);
            $categories = $this->productModel->getCategories();
            
            $data = [
                'title' => 'Busca: ' . $term . ' - UrbanAlternative',
                'products' => $products,
                'categories' => $categories,
                'search_term' => $term
            ];
            
            $this->view('products/search', $data);
        } else {
            $this->redirect('');
        }
    }
}