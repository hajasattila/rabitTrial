<?php
// userController.php

class UserController
{
    private $domain;

    public function __construct($db)
    {
        $this->domain = new userService($db); // UserDomain instantiation
    }

    public function getAllUsers()
    {
        try {
            // Call the getAllUsers() function from UserDomain.php
            $users = $this->domain->getAllUsers();
            return $users;
        } catch (Exception $e) {
            // Log the error
            exit;
        }
    }
}
?>