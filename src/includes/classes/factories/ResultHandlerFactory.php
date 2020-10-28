<?php

namespace WebPA\includes\classes\factories;

use WebPA\includes\classes\DAO;
use WebPA\includes\classes\ResultHandler;

class ResultHandlerFactory
{
    public function make(DAO $db)
    {
        return new ResultHandler($db, new GroupHandlerFactory());
    }
}
