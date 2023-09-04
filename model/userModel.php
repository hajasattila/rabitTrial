<?php
//userModel
class userModel
{
    // Private properties to store user informations
    private $id;
    private $username;

    //Constructor to initialize user properties
    private function __construct($id, $username)
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