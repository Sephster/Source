<?php

namespace WebPA\includes\classes\factories;

use WebPA\includes\classes\Assessment;
use WebPA\includes\classes\DAO;

class AssessmentFactory
{
    public function make(
        DAO $db,
        GroupHandlerFactory $groupHandlerFactory,
        AssessmentFactory $assessmentFactory,
        XMLParserFactory $xmlParserFactory,
        FormFactory $formFactory
    ) {
        return new Assessment($db, $groupHandlerFactory, $assessmentFactory, $xmlParserFactory, $formFactory);
    }
}
