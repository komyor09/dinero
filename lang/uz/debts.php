<?php

use App\Enums\DebtActionTypeEnum;
use App\Enums\DebtTypeEnum;

return [
    'title' => 'Qarzlar',
    'title_singular' => 'Qarz',
    'actions' => [
        'debt_transaction' => 'Qarz operatsiyasi',
    ],
    'fields' => [
        'name' => 'Nomi',
        'type' => 'Turi',
        'amount' => 'Summa',
        'description' => 'Tavsif',
        'start_at' => 'Boshlanish',
        'color' => 'Rang',
        'wallet' => 'Hamyon',
        'initial_wallet' => 'Boshlang‘ich hamyon',
        'happened_at' => 'Sana',
        'debt' => 'Qarz',
        'action_type' => 'Operatsiya turi',
        'from_wallet' => 'Hamyondan',
        'total_debt_amount' => 'Jami qarz summasi',
    ],
    'types' => [
        DebtTypeEnum::PAYABLE->value => 'To‘lanadigan',
        DebtTypeEnum::RECEIVABLE->value => 'Olinadigan',
    ],
    'action_types' => [
        DebtTypeEnum::RECEIVABLE->value => [
            DebtActionTypeEnum::DEBT_COLLECTION->value => 'Qarzni undirish',
            DebtActionTypeEnum::LOAN_INCREASE->value   => 'Qarzni oshirish',
            DebtActionTypeEnum::LOAN_INTEREST->value   => 'Foiz',
        ],
        DebtTypeEnum::PAYABLE->value => [
            DebtActionTypeEnum::REPAYMENT->value     => 'Qaytarish',
            DebtActionTypeEnum::DEBT_INCREASE->value => 'Qarzni oshirish',
            DebtActionTypeEnum::DEBT_INTEREST->value => 'Foiz',
        ],
    ],
    'tabs' => [
        'all' => 'Barchasi',
        'payable' => 'Toʻlanadigan',
        'receivable' => 'Olinadigan',
    ],
];
