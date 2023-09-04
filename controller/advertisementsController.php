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
            // @todo Log the error
            exit($e->getMessage());
        }
    }
}
?>