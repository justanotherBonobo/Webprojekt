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
        // load car list from xml file
        // into our repository
        // and check for the schema        
        $this->carRepository = new CarRepository();
        $this->valid = $this->carRepository->checkXML('data/cars.xml', 'data/carsScheme.xsd');
        $this->carRepository->loadXML('data/cars.xml');
    }

    /**
     * the default action
     */
    public function defaultAction()
    {
        //send cars to frontend
        $this->setData('valid', $this->valid);
        $this->setData('carList', $this->carRepository->getElements());
    }

    /**
     * the detail action
     */
    public function detailAction()
    {
        // send car with specific ID to frontend 
        $this->setData('car', $this->carRepository->findById($_GET['id']));
    }
}