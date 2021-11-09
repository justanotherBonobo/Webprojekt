<?php

namespace Controllers;

use Framework\AbstractController;
use Repository\CarRepository;
use Models\Car;

class CarController extends AbstractController
{  
    /**
     * car repository holds all the cars
     */
    protected $carRepository;

    public function _init()
    {
        // load car list from json file
        // into our repository        
        $this->carRepository = new CarRepository();
        $this->valid = $this->carRepository->checkXML('data/cars.xml', 'data/carsScheme.xsd');
        $this->carRepository->loadXML('data/cars.xml');
    }

    /**
     * the default action
     */
    public function defaultAction()
    {
        $this->setData('valid', $this->valid);
        $this->setData('carList', $this->carRepository->getElements());
    }

    /**
     * the detail action
     */
    public function detailAction()
    {
        // TODO: validate that id is in the get params
        // and that it holds a valid int
        $this->setData('car', $this->carRepository->findById($_GET['id']));
    }
}