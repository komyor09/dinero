<?php

use App\Enums\SpendTypeEnum;
use App\Enums\VisibilityStatusEnum;

return [
    'title' => 'Цели',
    'title_singular' => 'Цель',
    'actions' => [
        'deposit' => 'Пополнить',
        'withdraw' => 'Снять',
    ],
    'fields' => [
        'name' => 'Название',
        'amount' => 'Сумма',
        'target_date' => 'Целевая дата',
        'currency_code' => 'Код валюты',
        'color' => 'Цвет',
        'wallet' => 'Кошелёк',
        'from_wallet' => 'Из кошелька',
        'to_wallet' => 'В кошелёк',
        'goal' => 'Цель',
        'target_amount' => 'Целевая сумма',
        'balance' => 'Баланс',
        'target_from' => 'Цель с',
        'target_until' => 'Цель до',
    ],
];
