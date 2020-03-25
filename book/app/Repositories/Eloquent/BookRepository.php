<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\CategoryInterface;
use App\Model\Book;

class BookRepository extends EloquentRepository implements CategoryInterface
{

    /**
     * Get model
     * @return string
     */
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Book::class;
    }
}
