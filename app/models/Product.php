<?php
namespace App\Models;

use App\Core\Database;

class Product {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function getAll($limit = null) {
        $sql = "SELECT p.*, c.name as category_name, c.slug as category_slug 
                FROM products p 
                LEFT JOIN categories c ON p.category_id = c.id 
                WHERE p.active = 1 
                ORDER BY p.created_at DESC";
                
        if ($limit) {
            $sql .= " LIMIT " . $limit;
        }
        
        $this->db->query($sql);
        return $this->db->resultSet();
    }
    
    public function getFeatured($limit = 6) {
        $this->db->query("
            SELECT p.*, c.name as category_name, c.slug as category_slug 
            FROM products p 
            LEFT JOIN categories c ON p.category_id = c.id 
            WHERE p.featured = 1 AND p.active = 1 
            ORDER BY p.created_at DESC 
            LIMIT :limit
        ");
        $this->db->bind(':limit', $limit);
        return $this->db->resultSet();
    }
    
    public function getBySlug($slug) {
        $this->db->query("
            SELECT p.*, c.name as category_name, c.slug as category_slug 
            FROM products p 
            LEFT JOIN categories c ON p.category_id = c.id 
            WHERE p.slug = :slug AND p.active = 1
        ");
        $this->db->bind(':slug', $slug);
        return $this->db->single();
    }
    
    public function getByCategory($category_slug) {
        $this->db->query("
            SELECT p.*, c.name as category_name, c.slug as category_slug 
            FROM products p 
            LEFT JOIN categories c ON p.category_id = c.id 
            WHERE c.slug = :category_slug AND p.active = 1 
            ORDER BY p.created_at DESC
        ");
        $this->db->bind(':category_slug', $category_slug);
        return $this->db->resultSet();
    }
    
    public function search($term) {
        $this->db->query("
            SELECT p.*, c.name as category_name, c.slug as category_slug 
            FROM products p 
            LEFT JOIN categories c ON p.category_id = c.id 
            WHERE (p.name LIKE :term OR p.description LIKE :term) AND p.active = 1 
            ORDER BY p.created_at DESC
        ");
        $this->db->bind(':term', "%{$term}%");
        return $this->db->resultSet();
    }
    
    public function getCategories() {
        $this->db->query("SELECT * FROM categories ORDER BY name");
        return $this->db->resultSet();
    }
}