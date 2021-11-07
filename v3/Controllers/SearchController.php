<?php

namespace Controllers;

use Framework\AbstractController;
use Repository\CarRepository;
use Models\Car;



class SearchController extends AbstractController
{
    public $list = [];

    public function _init()
    {
        // load car list from json file
        // into our repository        
        $this->carRepository = new CarRepository();
        $this->carRepository->loadXML('data/cars.xml');
        $this->list = $this->carRepository->getElements();
    }

    /**
     * the default action
     */
    public function defaultAction()
    {
        $searchQuery = $_POST['query'];
        
        // do the search here ...
        $result = [];
    
        foreach($this->list as $car) {
            
            
            if (stripos($car->getModell(), $searchQuery) !== false) 
            {
                $result[] = $car;
            }

        }

        $this->setData('result', $result);
        $this->setData('query', $searchQuery);


    }
}