<?php
// UserController.php
require_once '../Services/UserService.php';
class UserController
{
    private $domain;

    public function __construct($db)
    {
        $this->domain = new UserService($db); // UserService instantiation
    }

    public function getAllUsers()
    {
        // Call the getAllUsers() function from UserService.php
        $users = $this->domain->getAllUsers();
        return $users;

    }
}
?>