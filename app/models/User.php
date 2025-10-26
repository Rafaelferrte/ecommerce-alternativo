<?php
namespace App\Models;

use App\Core\Database;

class Product {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function getAll($page = 1) {
        $offset = ($page - 1) * PRODUCTS_PER_PAGE;
        
        $this->db->query("
            SELECT p.*, c.name as category_name 
            FROM products p 
            LEFT JOIN categories c ON p.category_id = c.id 
            WHERE p.active = 1 
            ORDER BY p.created_at DESC 
            LIMIT :limit OFFSET :offset
        ");
        $this->db->bind(':limit', PRODUCTS_PER_PAGE);
        $this->db->bind(':offset', $offset);
        return $this->db->resultSet();
    }
    
    public function getById($id) {
        $this->db->query("
            SELECT p.*, c.name as category_name 
            FROM products p 
            LEFT JOIN categories c ON p.category_id = c.id 
            WHERE p.id = :id AND p.active = 1
        ");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    
    public function getByCategory($category_id, $page = 1) {
        $offset = ($page - 1) * PRODUCTS_PER_PAGE;
        
        $this->db->query("
            SELECT p.*, c.name as category_name 
            FROM products p 
            LEFT JOIN categories c ON p.category_id = c.id 
            WHERE p.category_id = :category_id AND p.active = 1 
            ORDER BY p.created_at DESC 
            LIMIT :limit OFFSET :offset
        ");
        $this->db->bind(':category_id', $category_id);
        $this->db->bind(':limit', PRODUCTS_PER_PAGE);
        $this->db->bind(':offset', $offset);
        return $this->db->resultSet();
    }
    
    public function search($term, $page = 1) {
        $offset = ($page - 1) * PRODUCTS_PER_PAGE;
        
        $this->db->query("
            SELECT p.*, c.name as category_name 
            FROM products p 
            LEFT JOIN categories c ON p.category_id = c.id 
            WHERE (p.name LIKE :term OR p.description LIKE :term) AND p.active = 1 
            ORDER BY p.created_at DESC 
            LIMIT :limit OFFSET :offset
        ");
        $this->db->bind(':term', "%{$term}%");
        $this->db->bind(':limit', PRODUCTS_PER_PAGE);
        $this->db->bind(':offset', $offset);
        return $this->db->resultSet();
    }
    
    public function getTotalProducts() {
        $this->db->query("SELECT COUNT(*) as total FROM products WHERE active = 1");
        return $this->db->single()->total;
    }
}