<?php

namespace SymfonyLive\Pos\Returns;

class RefundForCash
{
    /**
     * @var ReturnNumber
     */
    private $returnNumber;

    /**
     * @param ReturnNumber $returnNumber
     */
    public function __construct(ReturnNumber $returnNumber)
    {
        $this->returnNumber = $returnNumber;
    }

    /**
     * @return ReturnNumber
     */
    public function returnNumber()
    {
        return $this->returnNumber;
    }
}
