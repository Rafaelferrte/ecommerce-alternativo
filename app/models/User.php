<?php
namespace App\Models;

use App\Core\Database;

class User {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function register($data) {
        $this->db->query("
            INSERT INTO users (name, email, password, created_at) 
            VALUES (:name, :email, :password, NOW())
        ");
        
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', password_hash($data['password'], PASSWORD_DEFAULT));
        
        return $this->db->execute();
    }
    
    public function login($email, $password) {
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email', $email);
        
        $user = $this->db->single();
        
        if ($user && password_verify($password, $user->password)) {
            return $user;
        }
        
        return false;
    }
    
    public function findByEmail($email) {
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email', $email);
        return $this->db->single();
    }
}