<?php

namespace WebPA\includes\classes\factories;

use WebPA\includes\classes\DAO;
use WebPA\includes\classes\GroupCollection;

class GroupCollectionFactory
{
    public function make(DAO $dao)
    {
        return new GroupCollection($dao, new GroupFactory(), new SimpleIteratorFactory());
    }
}