<?php

namespace Models;

use Framework\ModelInterface;

class Book implements ModelInterface {
    private $_id;
    private $_name;
    private $_author;
    private $_year;

    public function getId()
    {
        return $this->_id;
    }
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getName()
    {
        return $this->_name;
    }
    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getAuthor()
    {
        return $this->_author;
    }
    public function setAuthor($author)
    {
        $this->_author = $author;
    }

    public function getYear()
    {
        return $this->_year;
    }        
    public function setYear($year)
    {
        $this->_year = $year;
    }        
}