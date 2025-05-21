<?php
require_once 'app/models/User.php';

class UserController {
    private $db;
    private $user;

    public function __construct() {
        $this->db = (new Database())->getConnection();
        $this->user = new User($this->db);
    }

    public function index() {
        $stmt = $this->user->read();
        include 'app/views/user/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->user->name = $_POST['name'];
            $this->user->email = $_POST['email'];
            $this->user->created_at = date('Y-m-d H:i:s');

            if ($this->user->create()) {
                header("Location: /");
            } else {
                echo "Unable to create user.";
            }
        } else {
            include 'app/views/user/create.php';
        }
    }

    public function edit($id) {
        $this->user->id = $id;
        $stmt = $this->user->readOne();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->user->name = $row['name'];
        $this->user->email = $row['email'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->user->name = $_POST['name'];
            $this->user->email = $_POST['email'];

            if ($this->user->update()) {
                header("Location: /");
            } else {
                echo "Unable to update user.";
            }
        } else {
            include 'app/views/user/edit.php';
        }
    }

    public function delete($id) {
        $this->user->id = $id;
        if ($this->user->delete()) {
            header("Location: /");
        } else {
            echo "Unable to delete user.";
        }
    }
}
?>
