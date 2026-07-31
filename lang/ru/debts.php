<?php

use App\Enums\DebtActionTypeEnum;
use App\Enums\DebtTypeEnum;

return [
    'title' => 'Долги',
    'title_singular' => 'Долг',
    'actions' => [
        'debt_transaction' => 'Операция по долгу',
    ],
    'fields' => [
        'name' => 'Название',
        'type' => 'Тип',
        'amount' => 'Сумма',
        'description' => 'Описание',
        'start_at' => 'Начало',
        'color' => 'Цвет',
        'wallet' => 'Кошелёк',
        'initial_wallet' => 'Исходный кошелёк',
        'happened_at' => 'Дата операции',
        'debt' => 'Долг',
        'action_type' => 'Тип операции',
        'from_wallet' => 'Из кошелька',
        'total_debt_amount' => 'Общая сумма долга',
    ],
    'types' => [
        DebtTypeEnum::PAYABLE->value => 'К оплате',
        DebtTypeEnum::RECEIVABLE->value => 'К получению',
    ],
    'action_types' => [
        DebtTypeEnum::RECEIVABLE->value => [
            DebtActionTypeEnum::DEBT_COLLECTION->value => 'Получение долга',
            DebtActionTypeEnum::LOAN_INCREASE->value   => 'Увеличение займа',
            DebtActionTypeEnum::LOAN_INTEREST->value   => 'Проценты',
        ],
        DebtTypeEnum::PAYABLE->value => [
            DebtActionTypeEnum::REPAYMENT->value     => 'Погашение',
            DebtActionTypeEnum::DEBT_INCREASE->value => 'Увеличение долга',
            DebtActionTypeEnum::DEBT_INTEREST->value => 'Проценты',
        ],
    ],
    'tabs' => [
        'all' => 'Все',
        'payable' => 'К выплате',
        'receivable' => 'К получению',
    ],
];
