<!-- advertisementController -->
<?php

class AdvertisementController
{
    private $domain;

    public function __construct($db)
    {
        $this->domain = new advertisementService($db); // AdvertisementService instantiation
    }

    public function getAdvertisements()
    {
        try {
            // Call the getAllAdvertisements() function from advertisementsService
            $advertisements = $this->domain->getAllAdvertisements();
            return $advertisements;
        } catch (Exception $e) {
            ErrorHandler::logError("Advertisement Controller Error", "An error occurred while fetching advertisements", $e);
        }
    }
}
?>