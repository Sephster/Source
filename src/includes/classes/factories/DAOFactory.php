<?php

namespace WebPA\includes\classes\factories;

use WebPA\includes\classes\DAO;

class DAOFactory
{
    public function make(string $host, string $user, string $password, string $database, bool $persistent)
    {
        return new DAO($host, $user, $password, $database, $persistent);
    }
}