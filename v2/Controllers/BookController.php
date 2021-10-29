<?php

namespace Controllers;

use Framework\AbstractController;

class BookController extends AbstractController
{
    // get this data from a model
    // in this case read it from an xml file
    protected $books = [
            'Titel 1' => [
                'Author' => 'Niels',
                'Jahr' => 2021
            ],
            'Titel 2' => [
                'Author' => 'Max',
                'Jahr' => 2020
            ],
            'Titel 3' => [
                'Author' => 'Mr. X',
                'Jahr' => 2019
            ]
            ,
            'Titel 4' => [
                'Author' => 'Santa Claus',
                'Jahr' => 1000
            ]
        ];

    public function defaultAction()
    {


        $this->setData('bookList', $this->books);



    }

    public function detailAction()
    {
        if(isset($_GET['search'])) {
            $search = $_GET['search'];
        }
        $this->setData('search', $search);
        // TODO: read book from GET params
        // set book details in view
    }
}