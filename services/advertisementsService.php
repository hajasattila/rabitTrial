<?php
//AdvertisementService.php
require_once '../Model/AdvertisementsModel.php';
class AdvertisementService
{
    private $db;

    // Constructor
    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get all advertisement from the database
    public function getAllAdvertisements()
    {
        $advertisements = [];
        // SQL query to all advertisements
        $sql = "SELECT * FROM advertisements";

        $result = $this->db->query($sql);

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