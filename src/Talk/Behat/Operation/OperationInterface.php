<?php
/**
 * Created by PhpStorm.
 * User: leonnleite
 * Date: 2/17/16
 * Time: 1:26 AM
 */

namespace Talk\Behat\Operation;


interface OperationInterface
{
    public function evaluate(array $operands = array());
}