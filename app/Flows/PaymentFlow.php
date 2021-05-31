<?php

namespace App\Flows;

use App\Flows\States\CheckCardPaymentStatus;
use App\Flows\States\PaymentBill;
use App\Flows\States\PaymentCard;
use App\Flows\States\PaymentCardConfirm;
use App\Flows\States\PaymentCardReject;
use App\Flows\States\PaymentCardWait;
use App\Flows\States\PaymentOnlineFail;
use App\Flows\States\PaymentOnlineSuccess;

class PaymentFlow extends AbstractFlow
{
    protected $name = 'PaymentFlow';
    protected $isMain = false;

    public function __construct()
    {
        $this->flow = [
            PaymentBill::class,
            PaymentCard::class,
            PaymentCardWait::class,
            CheckCardPaymentStatus::class,
            PaymentCardConfirm::class,
            PaymentCardReject::class,
            PaymentOnlineSuccess::class,
            PaymentOnlineFail::class,
        ];
    }
}
