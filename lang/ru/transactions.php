<?php

use App\Enums\SpendTypeEnum;
use App\Enums\TransactionTypeEnum;
use App\Enums\VisibilityStatusEnum;

return [
    'title' => 'Транзакции',
    'title_singular' => 'Транзакция',
    'fields' => [
        'amount' => 'Сумма',
        'confirmed' => 'Подтверждено',
        'category' => 'Категория',
        'account' => 'Счёт',
        'happened_at' => 'Дата операции',
        'description' => 'Описание',
        'type' => 'Тип',
        'wallet' => 'Кошелёк',
        'from_wallet' => 'Из кошелька',
        'to_wallet' => 'В кошелёк',
        'note' => 'Примечание',
        'attachment' => 'Вложение',
    ],
    'types' => [
        TransactionTypeEnum::DEPOSIT->value => [
            'id' => TransactionTypeEnum::DEPOSIT->value,
            'label' => 'Пополнение',
            'description' => 'Пополнение вашего кошелька',
        ],
        TransactionTypeEnum::WITHDRAW->value => [
            'id' => TransactionTypeEnum::WITHDRAW->value,
            'label' => 'Снятие',
            'description' => 'Снятие средств с вашего кошелька',
        ],
        TransactionTypeEnum::TRANSFER->value => [
            'id' => TransactionTypeEnum::TRANSFER->value,
            'label' => 'Перевод',
            'description' => 'Перевод между вашими кошельками',
        ],
        TransactionTypeEnum::PAYMENT->value => [
            'id' => TransactionTypeEnum::PAYMENT->value,
            'label' => 'Платёж',
            'description' => 'Платёж с одного кошелька на другой',
        ],
    ],
    'tabs' => [
        'all' => 'Все',
        'withdraw' => 'Расходы',
        'deposit' => 'Доходы',
    ],
];
