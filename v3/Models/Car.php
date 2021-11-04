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
    private $_beschleuigungAufHundert;
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
    public function setName($marke)
    {
        $this->_name = $marke;
    }

    public function getModell()
    {
        return $this->_author;
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
        $this->_year = $preis;
    }        
}