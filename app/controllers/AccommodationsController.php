<?php
// app/controllers/AccommodationsController.php
require_once '../app/models/Accommodations.php';

class AccommodationsController {
    private $AccommodationsModel;

    public function __construct() {
        $this->AccommodationsModel = new Accommodations();
    }

    public function index() {
        $Accommodations = $this->AccommodationsModel->getAllAccommodations();
        require_once '../app/views/Accommodations/index.php';

    }

    public function create() {
        require_once '../app/views/Accommodations/create.php';
    }
    public function store() {
        $nama_penginapan = $_POST['nama_penginapan'];
        $lokasi = $_POST['lokasi'];
        $fasilitas = $_POST['fasilitas'];
        $harga = $_POST['harga'];
        $this->AccommodationsModel->add($nama_penginapan,$lokasi, $fasilitas, $harga);
        header('Location: /Accommodations/index');
    }
        // Show the edit form with the Accommodations data
        public function edit($id) {
            $Accommodations = $this->AccommodationsModel->find($id); // Assume find() gets Accommodations by ID
            require_once __DIR__ . '/../views/Accommodations/edit.php';
        }
    
        // Process the update request
        public function update($id, $data) {
            $updated = $this->AccommodationsModel->update($id, $data);
            if ($updated) {
                header("Location: /Accommodations/index"); // Redirect to Accommodations list
            } else {
                echo "Failed to update Accommodations.";
            }
        }
    
        // Process delete request
        public function delete($id) {
            $deleted = $this->AccommodationsModel->delete($id);
            if ($deleted) {
                header("Location: /Accommodations/index"); // Redirect to Accommodations list
            } else {
                echo "Failed to delete Accommodations.";
            }
        }
    }