<?php

namespace App\Enums;

enum PaymentMethodEnum : int
{
    case Cash = 1;
    case Yape = 2;

    case TransferBank = 3;

}
