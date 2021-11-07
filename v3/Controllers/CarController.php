<?php

namespace Controllers;

use Framework\AbstractController;
use Repository\CarRepository;
use Models\Car;

class CarController extends AbstractController
{  
    /**
     * book repository holds all the books
     */
    protected $carRepository;

    public function _init()
    {
        // load book list from json file
        // into our repository        
        $this->carRepository = new CarRepository();
        $this->carRepository->loadXML('data/cars.xml');
    }

    /**
     * the default action
     */
    public function defaultAction()
    {
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