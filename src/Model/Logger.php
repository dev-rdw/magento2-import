<?php

namespace Ho\Import\Model;

use Ho\Import\Api\ImportProfileLogInterface;
use Magento\Framework\Logger\Monolog;


/**
 * Class Logger
 */
class Logger extends Monolog implements ImportProfileLogInterface
{
}