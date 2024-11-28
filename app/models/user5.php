<?php
// app/models/user5.php
require_once '../config/database.php';

class user5 {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    // Fetch all user5
    public function getAlluser5() {
        $query = $this->db->query("SELECT * FROM users");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Find user5 by ID
    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM users WHERE id_user5 = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    // Add a new user5
public function add($nama, $email, $nomor_telepon) {
    // Siapkan query
    $query = $this->db->prepare("
        INSERT INTO users (nama, email, nomor_telepon) 
        VALUES (:nama, :email, :nomor_telepon)
    ");

    // Bind parameter untuk mencegah SQL Injection
    $query->bindParam(':nama', $nama, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':nomor_telepon', $nomor_telepon, PDO::PARAM_STR);

    // Eksekusi query
    return $query->execute();
}


    // Update user5 data by ID
    public function update($id, $data) {
        $query = "UPDATE users SET nama = :nama, email = :email, nomor_telepon = :nomor_telepon WHERE id_user5 = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':nomor_telepon', $data['nomor_telepon']);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Delete user5 by ID
    public function delete($id) {
        $query = "DELETE FROM users WHERE id_user5 = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
