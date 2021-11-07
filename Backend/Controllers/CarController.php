<?php

namespace Controllers;

use Framework\AbstractController;
use Repository\CarRepository;
use Models\Car;

class CarController extends AbstractController
{  
    /**
     * car repository holds all the car
     */
    protected $carRepository;
    protected $xmlDatabase;

    public function _init()
    {
        // load car list from xml file
        //convert into json
        // load into our repository        
        $this->carRepository = new CarRepository();
        $this->carRepository->loadJsonFromXml('data/cars.xml');
    }

    /**
     * the default action
     */
    public function defaultAction()
    {
        $this->setData('carList', $this->bookRepository->getElements());
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