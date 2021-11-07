<?php

namespace Models;

use Framework\ModelInterface;

class Book implements ModelInterface {
    private $_id;
    private $_marke;
    private $_modell;
    private $_preis;
    private $_zustand;
    private $_kilometerstand;
    private $_farbe;
    private $_leistung;
    private $_getriebe;
    private $_beschleunigungAufHundert;
    private $_emissionsklasse;
    private $_kraftstoffart;
    private $_innerorts;
    private $_außerorts;
    private $_kombiniert;
   

    public function getId()
    {
        return $this->_id;
    }
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getMarke()
    {
        return $this->_marke;
    }
    public function setMarke($marke)
    {
        $this->_marke = $marke;
    }

    public function getModell()
    {
        return $this->_modell;
    }

    public function setModell($modell)
    {
        $this->_author = $modell;
    }

    public function getPreis()
    {
        return $this->_preis;
    }

    public function setPreis($preis)
    {
        $this->_preis = $preis;
    }

    public function getZustand()
    {
        return $this->_zustand;
    }

    public function setZustand($zustand)
    {
        $this->_zustand = $zustand;
    }

    public function getKilometerstand()
    {
        return $this->_kilometerstand;
    }        

    public function setKilometerstand($kilometerstand)
    {
        $this->_kilometerstand = $kilometerstand;
    }        
    
    public function getFarbe()
    {
        return $this->_farbe;
    }        
    public function setFarbe($farbe)
    {
        $this->_farbe = $farbe;
    }   
    
    public function getLeistung()
    {
        return $this->_leistung;
    }        
    public function setLeistung($leistung)
    {
        $this->_leistung = $leistung;
    }        
    
    public function getGetriebe()
    {
        return $this->_getriebe;
    }        

    public function setGetriebe($getriebe)
    {
        $this->_getriebe = $getriebe;
    }        
    
    public function getBeschleuigungAufHundert()
    {
        return $this->_beschleunigungAufHundert;
    }        
    
    public function setBeschleuigungAufHundert($beschleunigungAufHundert)
    {
        $this->_beschleunigungAufHundert = $beschleunigungAufHundert;
    }        
    
    public function getEmissionsklasse()
    {
        return $this->_emissionsklasse;
    }        
    public function setEmissionsklasse($emissionsklasse)
    {
        $this->_emissionsklasse = $emissionsklasse;
    }        
    
    public function getKraftstoffart()
    {
        return $this->_kraftstoffart;
    }        
    public function setKraftstoffart($kraftstoffart)
    {
        $this->_kraftstoffart = $kraftstoffart;
    }
    
    public function getInnerorts()
    {
        return $this->_innerorts;
    }    

    public function setInnerorts($innerorts)
    {
        $this->_year = $innerorts;
    }
    
    public function getAußerorts()
    {
        return $this->_außerorts;
    }        
    public function setAußerorts($außerorts)
    {
        $this->_außerorts = $außerorts;
    }
    
    public function getKombiniert()
    {
        return $this->_kombiniert;
    }        

    public function setKombiniert($kombiniert)
    {
        $this->_kombiniert = $kombiniert;
    }
}