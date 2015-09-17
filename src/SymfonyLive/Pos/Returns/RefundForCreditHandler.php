<?php

namespace SymfonyLive\Pos\Returns;

class RefundForCreditHandler
{
    public function __construct(Returns $returns)
    {
        $this->returns = $returns;
    }

    public function canHandle($command)
    {
        return $command instanceof RefundForCredit;
    }

    public function handle(RefundForCredit $command)
    {
        /* @var ProductReturn $return */
        $return = $this->returns->find($command->returnNumber());
        $return->refundForCredit();
    }
}
