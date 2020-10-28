<?php

namespace WebPA\includes\classes\factories;

use WebPA\includes\classes\SimpleIterator;

class SimpleIteratorFactory
{
    public function make($array = [])
    {
        new SimpleIterator($array);
    }
}