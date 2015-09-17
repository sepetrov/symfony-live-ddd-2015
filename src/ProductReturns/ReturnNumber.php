<?php


namespace ProductReturns;


class ReturnNumber
{
    /**
     * @var int
     */
    private $number;

    /**
     * ReturnNumber constructor.
     * @param int $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

}