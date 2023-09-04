<?php
//advertisementService.php
class advertisementService
{
    private $db;

    // Constructor
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllAdvertisements()
    {
        $advertisements = [];
        // SQL query to all advertisements
        $sql = "SELECT * FROM advertisements";

        $result = $this->db->query($sql);

        if (!$result) {
            throw new Exception("Error querying users: " . $this->db->error);
        }

        if ($result->num_rows > 0) {
            // Iterate through the query result and create Advertisement objects
            while ($row = $result->fetch_assoc()) {
                $advertisement = new advertisementModel($row['id'], $row['userid'], $row['title']);
                $advertisements[] = $advertisement;
            }
        }

        return $advertisements;
    }
}
// New user instance, to better separation between layers
$advertisementController = new AdvertisementController($conn);
$advertisements = $advertisementController->getAdvertisements();
?>