<?php
namespace App\Models;

use App\Core\Database;

class Cart {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function addToCart($user_id, $product_id, $quantity = 1) {
        // Verifica se o item já está no carrinho
        $this->db->query("SELECT * FROM cart WHERE user_id = :user_id AND product_id = :product_id");
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':product_id', $product_id);
        
        $existing = $this->db->single();
        
        if ($existing) {
            // Atualiza quantidade
            $this->db->query("UPDATE cart SET quantity = quantity + :quantity WHERE id = :id");
            $this->db->bind(':quantity', $quantity);
            $this->db->bind(':id', $existing->id);
        } else {
            // Adiciona novo item
            $this->db->query("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
            $this->db->bind(':user_id', $user_id);
            $this->db->bind(':product_id', $product_id);
            $this->db->bind(':quantity', $quantity);
        }
        
        return $this->db->execute();
    }
    
    public function getCart($user_id) {
        $this->db->query("
            SELECT c.*, p.name, p.price, p.image, p.slug 
            FROM cart c 
            JOIN products p ON c.product_id = p.id 
            WHERE c.user_id = :user_id
        ");
        $this->db->bind(':user_id', $user_id);
        return $this->db->resultSet();
    }
    
    public function getCartCount($user_id) {
        $this->db->query("SELECT SUM(quantity) as total FROM cart WHERE user_id = :user_id");
        $this->db->bind(':user_id', $user_id);
        $result = $this->db->single();
        return $result ? $result->total : 0;
    }
}