<?php


namespace ProductReturns;


class Price
{
    /**
     * @var int
     */
    private $amount;
    private $currency = 'GBP';

    /**
     * Price constructor.
     * @param int $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }


}