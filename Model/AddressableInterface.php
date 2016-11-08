<?php

namespace Addressable\Bundle\Model;

/**
 * Describes object that are addressable.
 */
interface AddressableInterface extends GeoPointInterface
{
    /**
     * Returns all address fields in an array(
     *       'country' => $this->getCountry(),
     *       'zipCode' => $this->getZipCode(),
     *       'streetNumber' => $this->getStreetNumber(),
     *       'streetName' => $this->getStreetName(),
     *       'city' => $this->getCity(),
     *       'administrativeAreaLevel1' => $this->getAdministrativeAreaLevel1(),
     *       'administrativeAreaLevel2' => $this->getAdministrativeAreaLevel2(),
     *       'latitude' => $this->getLatitude(),
     *       'longitude' => $this->getLongitude()
     *  )
     *
     * @return array
     */
    public function getAddress();
}
