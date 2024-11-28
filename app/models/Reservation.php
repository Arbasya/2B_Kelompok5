<?php
// app/models/User.php
require_once '../config/database.php';

class Reservation
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function getAllReservations()
    {
        $query = $this->db->query("SELECT * FROM reservations");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $query = $this->db->prepare("SELECT * FROM reservations WHERE id_reservations = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($pengguna, $penginapan, $tgl_reservasi, $status_pembayaran)
    {
        $query = $this->db->prepare("INSERT INTO reservations (pengguna, penginapan, tgl_reservasi, status_pembayaran) 
                                 VALUES (:pengguna, :penginapan, :tgl_reservasi, :status_pembayaran)");
        $query->bindParam(':pengguna', $pengguna);
        $query->bindParam(':penginapan', $penginapan);
        $query->bindParam(':tgl_reservasi', $tgl_reservasi);
        $query->bindParam(':status_pembayaran', $status_pembayaran);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data)
    {
        // Gantilah id dengan id_reservations pada bagian WHERE
        $query = "UPDATE reservations SET pengguna = :pengguna, penginapan = :penginapan, tgl_reservasi = :tgl_reservasi, status_pembayaran = :status_pembayaran WHERE id_reservations = :id";

        $stmt = $this->db->prepare($query);

        // Ambil data dari $data yang dikirim
        $stmt->bindParam(':pengguna', $data['pengguna']);
        $stmt->bindParam(':penginapan', $data['penginapan']);
        $stmt->bindParam(':tgl_reservasi', $data['tgl_reservasi']);
        $stmt->bindParam(':status_pembayaran', $data['status_pembayaran']);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }


    // Delete user by ID
    public function delete($id)
    {
        try {
            $query = "DELETE FROM reservations WHERE id_reservations = :id_reservations"; // Sesuaikan nama kolom
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id_reservations', $id, PDO::PARAM_INT); // Bind parameter sesuai
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            error_log("PDO Error: " . $e->getMessage());
            throw new Exception("Error: " . $e->getMessage());
        }
    }
}
