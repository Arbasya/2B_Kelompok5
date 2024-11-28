<?php
// app/models/Accommodations.php
require_once '../config/database.php';

class Accommodations {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllAccommodations() {
        $query = $this->db->query("SELECT * FROM accommodations");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM accommodations WHERE id_accommodations = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_penginapan, $lokasi, $fasilitas , $harga) {
        $query = $this->db->prepare("INSERT INTO accommodations (nama_penginapan, lokasi, fasilitas, harga) VALUES (:nama_penginapan, :lokasi, :fasilitas, :harga)");
        $query->bindParam(':nama_penginapan', $nama_penginapan);
        $query->bindParam(':lokasi', $lokasi);
        $query->bindParam(':fasilitas', $fasilitas);
        $query->bindParam(':harga', $harga);
        return $query->execute();
    }

    // Update Accommodations data by ID
    public function update($id, $data) {
    $query = "UPDATE accommodations 
              SET nama_penginapan = :nama_penginapan, 
                  lokasi = :lokasi, 
                  fasilitas = :fasilitas, 
                  harga = :harga 
              WHERE id_accommodations = :id";
              
    $stmt = $this->db->prepare($query);

    // Bind data dari parameter $data
    $stmt->bindParam(':nama_penginapan', $data['nama_penginapan']);
    $stmt->bindParam(':lokasi', $data['lokasi']);
    $stmt->bindParam(':fasilitas', $data['fasilitas']);
    $stmt->bindParam(':harga', $data['harga']);
    $stmt->bindParam(':id', $id);

    return $stmt->execute();
}


    // Delete Accommodations by ID
    public function delete($id) {
        $query = "DELETE FROM accommodations WHERE id_accommodations = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
