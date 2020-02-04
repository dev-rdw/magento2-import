<?php
/**
 * Copyright (c) 2016 H&O E-commerce specialisten B.V. (http://www.h-o.nl/)
 * See LICENSE.txt for license details.
 */

namespace Ho\Import\RowModifier;

use Ho\Import\Api\ImportProfileLogInterface;
use Symfony\Component\Console\Output\ConsoleOutput;

/**
 * Base implementation of the RowModifier
 *
 * @package Ho\Import
 */
abstract class AbstractRowModifier
{
    /**
     * ImportProfileLogInterface items to the console.
     *
     * @var ConsoleOutput
     */
    protected $consoleOutput;

    /**
     * @var ImportProfileLogInterface
     */
    protected $log;

    /**
     * Item array with all items to import
     *
     * @var \[]
     */
    protected $items;

    /**
     * @param ConsoleOutput $consoleOutput
     * @param ImportProfileLogInterface           $log
     */
    public function __construct(ConsoleOutput $consoleOutput, ImportProfileLogInterface $log)
    {
        $this->consoleOutput = $consoleOutput;
        $this->log = $log;
    }

    /**
     * Set the data array for fields to import
     *
     * @param \[] &$items
     * @return void
     */
    public function setItems(&$items)
    {
        $this->items =& $items;
    }

    /**
     * Method to process the row data
     *
     * @return void
     */
    abstract public function process();
}
