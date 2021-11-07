<?php

namespace Framework;

abstract class AbstractRepository
{
    protected $_list = [];

    //reuse of exisitng Code for Json Database by converting XML to Json

    /**
     * load contents from a json file
     */
    public function loadJsonFromXml($filename)
    {
        if (file_exists($filename)) {
            $fileContentAsXml = simplexml_load_string($filename);
            $FileContentXmlToJson = json_encode($fileContentAsXml);
            $fileContent = json_decode($FileContentXmlToJson,TRUE);

            $this->createObjects($fileContent);
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