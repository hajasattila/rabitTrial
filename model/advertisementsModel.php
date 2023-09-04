<?php
//advertisementModel
class advertisementModel
{
    // Private properties to store advertisement informations
    private $id;
    private $userid;
    private $title;

    //Constructor to initialize advertisement properties
    public function __construct($id, $userid, $title)
    {
        $this->id = $id;
        $this->userid = $userid;
        $this->title = $title;
    }
    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->userid;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
?>