<?php

namespace Framework;

use DOMDocument;

abstract class AbstractRepository
{
    protected $_list = [];

    /**
     * load contents from a XML file
     */

    public function loadXML($filename)
    {
        if (file_exists($filename)) {


            $xml = simplexml_load_file($filename);
            $this->createObjects($xml);
        } else {
            die('file not found');
        }
    }

    public function checkXML($xmlFilename, $schemaFilename)
    {
        if (file_exists($xmlFilename)) {
            $xmlContent = file_get_contents($xmlFilename);
            $xml = new DOMDocument();
            $xml->loadXML($xmlContent, LIBXML_NOBLANKS);
                if ($xml->schemaValidate($schemaFilename)) {
                    return true;
                }
                return false;
            
        } else {
            die('file not found');
        }
    }

    /**
     * find an item in the list by its id
     */
    public function findById($id)
    {
        $itemFound = null;

        foreach ($this->_list as $item) {
            if ($item->getId() == $id) {
                $itemFound = $item;
            }
        }

        return $itemFound;
    }

    /**
     * Get the list of all elements in this repository
     */
    public function getElements()
    {
        return $this->_list;
    }
}
