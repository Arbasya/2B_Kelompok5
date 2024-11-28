<?php
// app/controllers/user5Controllers.php
require_once '../app/models/user5.php';

class User5Controller {
    private $user5Model;

    public function __construct() {
        $this->user5Model = new user5();
    }

    public function index() {
        $user5 = $this->user5Model->getAlluser5();
        require_once '../app/views/users/index.php';

    }

    public function create() {
        require_once '../app/views/users/create.php';
    }

    public function store() {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nomor_telepon = $_POST['nomor_telepon'];
    
        if ($nama && $email && $nomor_telepon) {
            $this->user5Model->add($nama, $email, $nomor_telepon);
            header('Location: /user5/index');
        } else {
            echo "Harap isi semua field.";
        }
    }
    
    // Show the edit form with the user5 data
    public function edit($id) {
        $user5 = $this->user5Model->find($id); // Assume find() gets user5 by ID
        require_once __DIR__ . '/../views/users/edit.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->user5Model->update($id, $data);
        if ($updated) {
            header("Location: /users/index"); // Redirect to user5 list
        } else {
            echo "Failed to update user5.";
        }
    }

    // Process delete request
    public function delete($id) {
        $deleted = $this->user5Model->delete($id);
        if ($deleted) {
            header("Location: /users/index"); // Redirect to user5 list
        } else {
            echo "Failed to delete user5.";
        }
    }
}
