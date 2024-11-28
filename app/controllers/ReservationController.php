<?php
// app/controllers/UserController.php
require_once '../app/models/Reservation.php';

class ReservationController {
    private $ReservationModel;

    public function __construct() {
        $this->ReservationModel = new Reservation();
    }

    public function index() {
        $users = $this->ReservationModel->getAllReservations();
        require_once '../app/views/Reservation/index.php';

    }

    public function create() {
        require_once '../app/views/Reservation/create.php';
    }

    public function store() {
        $pengguna = $_POST['pengguna'];
        $penginapan = $_POST['penginapan'];
        $tgl_reservasi = $_POST['tgl_reservasi'];
        $status_pembayaran = $_POST['status_pembayaran'];
        $this->ReservationModel->add($pengguna, $penginapan, $tgl_reservasi, $status_pembayaran);
        header('Location: /Reservation/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $user = $this->ReservationModel->find($id); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/Reservation/edit.php';
    }

    // Process the update request
    public function update($id, $data)
    {
        $updated = $this->ReservationModel->update($id, $data);
        if ($updated) {
            header("Location: /Reservation/index"); // Redirect to user list
        } else {
            echo "Gagal untuk merubah data.";
        }
    }
    // Process delete request
    public function delete($id) {
        $deleted = $this->ReservationModel->delete($id);
        if ($deleted) {
            header("Location: /Reservation/index"); // Redirect to user list
        } else {
            echo "Gagal untuk menghapus data";
        }
    }
}
