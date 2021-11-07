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

            $car->setId($data['ID']);
            $car->setModell($data->Modell);
            $car->setFarbe($data->Farbe);
            /**..... */

            $this->_list[] = $car;
        }
    }
}