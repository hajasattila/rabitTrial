<!-- advertisementController -->
<?php
//Database(db)
require_once '../db.php';
//adv modell 
require_once '../model/advertisementsModel.php';
class AdvertisementController
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAdvertisements()
    {
        $advertisements = [];

        $sql = "SELECT * FROM advertisements";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $advertisement = new advertisementModel($row['id'], $row['userid'], $row['title']);
                $advertisements[] = $advertisement;
            }
        }

        return $advertisements;
    }

}

?>