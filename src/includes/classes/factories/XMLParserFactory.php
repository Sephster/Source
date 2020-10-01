<?php

namespace WebPA\includes\classes\factories;

use WebPA\includes\classes\XMLParser;

class XMLParserFactory
{
    public function make()
    {
        return new XMLParser();
    }
}
