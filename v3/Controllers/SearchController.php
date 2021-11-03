<?php

namespace Controllers;

use Framework\AbstractController;
use Repository\BookRepository;
use Models\Book;



class SearchController extends AbstractController
{
    public $list = [];

    public function _init()
    {
        // load book list from json file
        // into our repository        
        $this->bookRepository = new BookRepository();
        $this->bookRepository->loadJson('data/books.json');
        $this->list = $this->bookRepository->getElements();
    }

    /**
     * the default action
     */
    public function defaultAction()
    {
        $searchQuery = $_POST['query'];
        

        // do the search here ...
        $result = [];
    
        foreach($this->list as $book) {
            if (!strcasecmp($book->getID(), $searchQuery)) 
            {
                $result[] = $book;
            }

        }



        $this->setData('query', $searchQuery);
        $this->setData('result', $result);
    }
}