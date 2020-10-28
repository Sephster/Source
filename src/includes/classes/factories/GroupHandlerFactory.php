<?php

namespace WebPA\includes\classes\factories;

use WebPA\includes\classes\DAO;
use WebPA\includes\classes\GroupHandler;

class GroupHandlerFactory
{
    public function make(DAO $dao)
    {
        return new GroupHandler($dao, new GroupCollectionFactory());
    }
}
