<?php  
namespace App\Controllers;

use App\Models\User;

class UserController {
    private $userModel;
    public function __construct($databaseConnection) {
        $this->userModel = new User($databaseConnection);
    }

    public function profile($id) {
        $user = $this->userModel->getUserById($id);
        include __DIR__ . '/../Views/user.php';
    }

    public function list() {
        $users = $this->userModel->getAllUsers();
        include __DIR__ . '/../Views/user_list.php';
    }
}
