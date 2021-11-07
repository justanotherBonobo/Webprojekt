<?php

namespace Framework;

abstract class AbstractRepository
{
    protected $_list = [];

    /**
     * load contents from a json file
     */
    public function loadJson($filename)
    {
        if (file_exists($filename)) {
            $fileContentAsJson = file_get_contents($filename);
            $fileContent = json_decode($fileContentAsJson, true);

            $this->createObjects($fileContent);
        } else {
            die('file not found');
        }
    }

    public function loadXML($filename)
    {
        if (file_exists($filename)) {
            $xml = simplexml_load_file($filename);

            $this->createObjects($xml);
        } else {
            die('file not found');
        }
    }

    /**
     * find an item in the list by its id
     */
    public function findById($id) {
        $itemFound = null;

        foreach($this->_list as $item) {
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