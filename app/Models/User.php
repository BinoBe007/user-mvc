<?php 
namespace App\Models;

class User {
    private $db;

    public function __construct($databaseConnection) {
        $this->db = $databaseConnection;
    }

    public function getUserById($id) {
        $id = intval($id);
        $result = $this->db->query("SELECT * FROM users WHERE id = $id");
        return $result->fetch_assoc();
    }
    
    public function getAllUsers() {
        $result = $this->db->query("SELECT * FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
