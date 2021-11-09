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
        // load car list from xml file
        // into our repository   
        // and check with schema     
        $this->carRepository = new CarRepository();
        $this->carRepository->loadXML('data/cars.xml');
        $this->list = $this->carRepository->getElements();
        $this->valid = $this->carRepository->checkXML('data/cars.xml', 'data/carsScheme.xsd');
    }

    /**
     * the default action
     */
    public function defaultAction()
    {
        $searchQuery = $_POST['query'];

        $this->setData('valid', $this->valid);
        
        $result = [];
    
        //check if the cars match with th query
        foreach($this->list as $car) {
            
            
            if ($this->searchCheck($car, $searchQuery)) 
            {
                $result[] = $car;
            }

        }

        $this->setData('result', $result);
        $this->setData('query', $searchQuery);


    }


    //function for searching the cars
    public function searchCheck($car, $query){
        $queryArr = explode(' ', $query);
        $result = false;
        foreach($queryArr as $word){
            if (
                (stripos($car->getModell(), $word) !== false)||
                (stripos($car->getMarke(), $word) !== false)||
                (stripos($car->getFarbe(), $word) !== false)||
                (stripos($car->getZustand(), $word) !== false)||
                (stripos($car->getKraftstoffart(), $word) !== false)||
                (stripos($car->getKilometerstand(), $word) !== false)||
                (stripos($car->getPreis(), $word) !== false)||
                (stripos($car->getLeistung(), $word) !== false)||
                (stripos($car->getHoechstgeschwindigkeit(), $word) !== false)||
                (stripos($car->getGetriebe(), $word) !== false)||
                (stripos($car->getBeschleuigungAufHundert(), $word) !== false)||
                (stripos($car->getEmissionsklasse(), $word) !== false)||
                (stripos($car->getErstzulassung(), $word) !== false)
            )
    
            {
                $result = true;
            }
            else{
                $result = false;
                break;
            } 
        }
        
        return $result;

    }
}