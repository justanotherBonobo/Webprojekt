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

            $car->setImg($data->img);
            $car->setId($data['ID']);
            $car->setMarke($data->Marke);
            $car->setModell($data->Modell);
            $car->setPreis($data->Preis);
            $car->setZustand($data->Zustand);
            $car->setErstzulassung($data->Erstzulassung);
            $car->setKilometerstand($data->Kilometerstand);
            $car->setFarbe($data->Farbe);
            $car->setHöchstgeschwindigkeit($data->Höchstgeschwindigkeit);
            $car->setLeistung($data->Leistung);
            $car->setGetriebe($data->Getriebe);
            $car->setBeschleuigungAufHundert($data->BeschleunigungAufHundert);
            $car->setEmissionsklasse($data->Emissionsklasse);
            $car->setKraftstoffart($data->Kraftstoffart);
            $car->setInnerorts($data->KraftstoffverbrauchNEFZ->Innerorts);
            $car->setAußerorts($data->KraftstoffverbrauchNEFZ->Außerorts);
            $car->setKombiniert($data->KraftstoffverbrauchNEFZ->Kombiniert);
            /**..... */

            $this->_list[] = $car;
        }
    }
}