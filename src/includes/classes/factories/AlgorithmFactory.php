<?php

/**
 * AlgorithmFactory
 *
 * Use this class to select which algorithms to load.
 *
 * @copyright Loughborough University
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPL version 3
 *
 * @link https://github.com/webpa/webpa
 */

namespace WebPA\includes\classes\factories;

use WebPA\includes\classes\algorithms\WebPAAlgorithm;

class AlgorithmFactory
{
    /**
     * Get an instance of the requested algorithm class.
     *
     * @param string $name The algorithm to create.
     *
     * @return  mixed  The algorithm object requested. On fail, null.
     */
    public function make($name)
    {
        $algorithm = null;

        switch ($name) {
            case 'pets':
                // @todo : There appear to be grading problems with the PETS algorithm in peer-only mode.
                // Until we have conducted a full investigation and nailed down what's happening
                // this algorithm is disabled.
                //
                //require_once(DOC__ROOT.'includes/classes/algorithms/class_pets_algorithm.php');
                //$algorithm = new PETSAlgorithm();
                break;
            case 'webpa':
            default:
                $algorithm = new WebPAAlgorithm(new GroupHandlerFactory(), new ResultHandlerFactory());

                break;
        }

        return $algorithm;
    }
}
