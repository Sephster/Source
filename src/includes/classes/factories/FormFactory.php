<?php

namespace WebPA\includes\classes\factories;

use WebPA\includes\classes\DAO;
use WebPA\includes\classes\Form;

class FormFactory
{
    public function make(DAO $db)
    {
        return new Form($db);
    }
}