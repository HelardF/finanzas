<?php

namespace App\Enums;

enum withdrawalTypeEnum: int
{
    case Expense = 1;
    case withdrawal = 2;
    case purchase = 3;
}
