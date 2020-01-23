<?php declare (strict_types = 1);

namespace LexofficeSdk\Invoice;

use LexofficeSdk\Abstracts\EntityAbstract;

class TaxAmountEntity extends EntityAbstract
{
    public $taxRatePercentage;
    public $taxAmount;
    public $netAmount;
}
