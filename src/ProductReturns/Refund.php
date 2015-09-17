<?php


namespace ProductReturns;


abstract class Refund
{
    /**
     * @var \DateTimeImmutable
     */
    private $date;

    /**
     * Refund constructor.
     * @param \DateTimeImmutable $date
     */
    public function __construct(\DateTimeImmutable $date)
    {
        $this->date = $date;
    }

    /**
     * @param ProductReturn $return
     * @return bool
     */
    abstract function isAllowed(ProductReturn $return);
}