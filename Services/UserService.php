<?php
//UserService.php
require_once '../Model/UserModel.php';
class UserService
{
    private $db;

    // Constructor
    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get all user from the database
    public function getAllUsers()
    {
        $users = [];
        // SQL query to all users
        $sql = "SELECT * FROM users";

        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            // Iterate through the query result and create User objects
            while ($row = $result->fetch_assoc()) {
                $user = new userModel($row['id'], $row['name']);
                $users[] = $user;
            }
        }

        return $users;
    }
}
// New user instance, to better separation between layers
$userController = new UserController($conn);
$users = $userController->getAllUsers(); //Get all users
?>