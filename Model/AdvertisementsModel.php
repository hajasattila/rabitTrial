<?php
//AdvertisementModel.php
class AdvertisementModel
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
    //User pairing for advertisements based on user id
    public function getUserName($connection)
    {
        $sql = "SELECT name FROM users WHERE id = " . $this->userid;
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['name'];
        }

        return "Unknown User";
    }
}
?>