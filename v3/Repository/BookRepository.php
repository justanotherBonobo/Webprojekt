<?php

namespace Repository;

use Framework\RepositoryInterface;
use Framework\AbstractRepository;
use Models\Book;

class BookRepository
    extends AbstractRepository
    implements RepositoryInterface
{
    /**
     * Create a list of book objects
     * from an given array of books
     * 
     * @param array $list
     */
    public function createObjects($list)
    {
        foreach($list as $id => $data) {
            $book = new Book();

            $book->setId($id);
            $book->setName($data['Title']);
            $book->setAuthor($data['Author']);
            $book->setYear($data['Jahr']);

            $this->_list[] = $book;
        }
    }
}