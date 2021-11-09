<?php

namespace Repository;

use Framework\RepositoryInterface;
use Framework\AbstractRepository;
use Models\Car;

class CarRepository
    extends AbstractRepository
    implements RepositoryInterface
{
    /**
     * Create a list of book objects
     * from an given array of books
     * 
     * @param array $list
     */
    public function createObjects($xml)
    {
        foreach($xml->Auto as $data) {
            $car = new Car();
            //iterate through the car objects in the XML file and create a car object with all attributes
            $car->setImg($data->img);
            $car->setId($data['ID']);
            $car->setMarke($data->Marke);
            $car->setModell($data->Modell);
            $car->setPreis($data->Preis);
            $car->setZustand($data->Zustand);
            $car->setErstzulassung($data->Erstzulassung);
            $car->setKilometerstand($data->Kilometerstand);
            $car->setFarbe($data->Farbe);
            $car->setHoechstgeschwindigkeit($data->Hoechstgeschwindigkeit);
            $car->setLeistung($data->Leistung);
            $car->setGetriebe($data->Getriebe);
            $car->setBeschleuigungAufHundert($data->BeschleunigungAufHundert);
            $car->setEmissionsklasse($data->Emissionsklasse);
            $car->setKraftstoffart($data->Kraftstoffart);
            $car->setInnerorts($data->KraftstoffverbrauchNEFZ->Innerorts);
            $car->setAusserorts($data->KraftstoffverbrauchNEFZ->Ausserorts);
            $car->setKombiniert($data->KraftstoffverbrauchNEFZ->Kombiniert);
            
            //append the created car object to the cars array
            $this->_list[] = $car;
        }
    }
}