<?php

    use App\Controllers\IncomeController;
    use App\Controllers\WithdrawalController;
    use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\withdrawalTypeEnum;

require ('vendor/autoload.php');

//    $incomeController = new IncomeController();
//    $incomeController->store([
//        "paymentMethod" => PaymentMethodEnum::TransferBank->value,
//        "type" =>IncomeTypeEnum::Salary->value,
//        "date" => date("Y-m-d H:i"),
//        "amount" => 750,
//        "description" => "ingreso de enero",
//
//    ]);

//$withdrawal = new WithdrawalController();
//$withdrawal->store([
//    "paymentMethod" => PaymentMethodEnum::Cash->value,
//    "type" => withdrawalTypeEnum::Expense->value,
//    "date" => date("Y-m-d H:i"),
//    "amount" => 100,
//    "description" => "pago de servicio de internet",
//
//]);
//    $income = new IncomeController();
//    $income->index();

//    $withdrawal = new WithdrawalController();
//    $withdrawal->index();
//
//    $income = new IncomeController();
//    $income->show(1);

//    $withdrawal = new WithdrawalController();
//    $withdrawal->show(2);

    $income=new IncomeController();
    $income->destroy(15);