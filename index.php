<?php

    use App\Controllers\IncomeController;
    use App\Controllers\WithdrawalController;

    require ('vendor/autoload.php');

    $incomeController = new IncomeController();
    $incomeController->store([
        "paymentMethod" => 1,
        "type" =>1,
        "date" => date("Y-m-d H:i"),
        "amount" => 10000.50,
        "description" => "ingresos mensuales de enero",

    ]);

