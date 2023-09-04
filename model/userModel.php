<?php
// userModel.php
class userModel
{
    // Private properties to store user information
    private $id;
    private $username;

    // Constructor to initialize user properties (change access to public)
    public function __construct($id, $username)
    {
        $this->id = $id;
        $this->username = $username;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }
}
?>