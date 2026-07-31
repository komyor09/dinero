<?php

use App\Enums\SpendTypeEnum;
use App\Enums\TransactionTypeEnum;
use App\Enums\VisibilityStatusEnum;

return [
    'title' => 'Амалиётҳо',
    'title_singular' => 'Амалиёт',
    'fields' => [
        'amount' => 'Маблағ',
        'confirmed' => 'Тасдиқшуда',
        'category' => 'Категория',
        'account' => 'Ҳисоб',
        'happened_at' => 'Санаи амалиёт',
        'description' => 'Тавсиф',
        'type' => 'Навъ',
        'wallet' => 'Ҳамён',
        'from_wallet' => 'Аз ҳамён',
        'to_wallet' => 'Ба ҳамён',
        'note' => 'Ёддошт',
        'attachment' => 'Замима',
    ],
    'types' => [
        TransactionTypeEnum::DEPOSIT->value => [
            'id' => TransactionTypeEnum::DEPOSIT->value,
            'label' => 'Пур кардан',
            'description' => 'Пур кардани ҳамёни шумо',
        ],
        TransactionTypeEnum::WITHDRAW->value => [
            'id' => TransactionTypeEnum::WITHDRAW->value,
            'label' => 'Гирифтан',
            'description' => 'Гирифтани маблағ аз ҳамёни шумо',
        ],
        TransactionTypeEnum::TRANSFER->value => [
            'id' => TransactionTypeEnum::TRANSFER->value,
            'label' => 'Интиқол',
            'description' => 'Интиқол байни ҳамёнҳои шумо',
        ],
        TransactionTypeEnum::PAYMENT->value => [
            'id' => TransactionTypeEnum::PAYMENT->value,
            'label' => 'Пардохт',
            'description' => 'Пардохт аз як ҳамён ба ҳамёни дигар',
        ],
    ],
    'tabs' => [
        'all' => 'Ҳама',
        'withdraw' => 'Хароҷот',
        'deposit' => 'Даромад',
    ],
];
