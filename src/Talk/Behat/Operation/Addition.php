<?php
/**
 * Created by PhpStorm.
 * User: leonnleite
 * Date: 2/17/16
 * Time: 1:24 AM
 */

namespace Talk\Behat\Operation;


class Addition implements OperationInterface
{

    public function evaluate(array $operands = array())
    {
        return array_sum($operands);
    }
}