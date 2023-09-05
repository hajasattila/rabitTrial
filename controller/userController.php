<?php
// userController.php
require_once '../services/userService.php'; //Service 
class UserController
{
    private $domain;

    public function __construct($db)
    {
        $this->domain = new userService($db); // UserService instantiation
    }

    public function getAllUsers()
    {
        try {
            // Call the getAllUsers() function from UserService.php
            $users = $this->domain->getAllUsers();
            return $users;
        } catch (Exception $e) {
            ErrorHandler::logError("User Controller Error", "An error occurred while fetching users", $e);
        }
    }
}
?>