<?php

use App\Enums\SpendTypeEnum;
use App\Enums\VisibilityStatusEnum;

return [
    'title' => 'Maqsadlar',
    'title_singular' => 'Maqsad',
    'actions' => [
        'deposit' => 'To‘ldirish',
        'withdraw' => 'Yechib olish',
    ],
    'fields' => [
        'name' => 'Nomi',
        'amount' => 'Summa',
        'target_date' => 'Maqsad sanasi',
        'currency_code' => 'Valyuta kodi',
        'color' => 'Rang',
        'wallet' => 'Hamyon',
        'from_wallet' => 'Hamyondan',
        'to_wallet' => 'Hamyonga',
        'goal' => 'Maqsad',
        'target_amount' => 'Maqsad summasi',
        'balance' => 'Balans',
        'target_from' => 'Boshlanish sanasi',
        'target_until' => 'Tugash sanasi',
    ],
];
