<?php

namespace Controllers;

use Framework\AbstractController;
use Repository\BookRepository;
use Models\Book;

class BookController extends AbstractController
{  
    /**
     * book repository holds all the books
     */
    protected $bookRepository;

    public function _init()
    {
        // load book list from json file
        // into our repository        
        $this->bookRepository = new BookRepository();
        $this->bookRepository->loadJson('data/books.json');
    }

    /**
     * the default action
     */
    public function defaultAction()
    {
        $this->setData('bookList', $this->bookRepository->getElements());
    }

    /**
     * the detail action
     */
    public function detailAction()
    {
        // TODO: validate that id is in the get params
        // and that it holds a valid int
        $this->setData('book', $this->bookRepository->findById($_GET['id']));
    }
}