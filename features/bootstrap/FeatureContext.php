<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    protected $calculator;

    /**
     * @BeforeScenario
     */
    public function initCalculator()
    {
        $this->calculator = new \Talk\Behat\Calculator();
    }

    /**
     * @Given o numero :arg1 mais o segundo numero :arg2
     */
    public function oNumeroMaisOSegundoNumero($numberOne, $numberTwo)
    {
        $this->calculator->setOperands([$numberOne, $numberTwo]);
    }

    /**
     * @When somado
     */
    public function somado()
    {
        $this->calculator->setOperation(new \Talk\Behat\Operation\Addition);
    }

    /**
     * @Then trará o numero :arg1
     */
    public function traraONumero($result)
    {
        PHPUnit_Framework_Assert::assertEquals($this->calculator->process(), $result);
    }

    /**
     * @Given o numero :arg1 mais o segundo numero :arg2 e o :arg3
     */
    public function oNumeroMaisOSegundoNumeroEO($numberOne, $numberTwo, $numberThree)
    {
        $this->calculator->setOperands([$numberOne, $numberTwo, ($numberThree + 1)]); //proposital
    }
}
