<?php
/**
 * Created by PhpStorm.
 * User: leonnleite
 * Date: 2/17/16
 * Time: 1:22 AM
 */

namespace Talk\Behat;


use Talk\Behat\Operation\OperationInterface;

class Calculator
{
    protected $operands = array();

    public function setOperands(array $operands = array())
    {
        $this->operands = $operands;
    }

    public function addOperand($operand)
    {
        $this->operands[] = $operand;
    }

    /**
     * You need any operation that implement the given interface
     */
    public function setOperation(OperationInterface $operation)
    {
        $this->operation = $operation;
    }

    public function process()
    {
        return $this->operation->evaluate($this->operands);
    }}