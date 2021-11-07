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
     * Create a list of car objects
     * from an given array of cars
     * 
     * @param array $list
     */
    public function createObjects($list)
    {
        foreach($list as $id => $data) {
            $car = new Car();

            $car->setId($id);
            $car->setMarke($data['Marke']);
            $car->setHersteller($data['Hersteller']);
            $car->setPreis($data['Preis']);

            $this->_list[] = $car;
        }
    }
}