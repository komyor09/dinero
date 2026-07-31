<?php

use App\Enums\SpendTypeEnum;
use App\Enums\TransactionTypeEnum;
use App\Enums\VisibilityStatusEnum;

return [
    'title' => 'Tranzaksiyalar',
    'title_singular' => 'Tranzaksiya',
    'fields' => [
        'amount' => 'Summa',
        'confirmed' => 'Tasdiqlangan',
        'category' => 'Kategoriya',
        'account' => 'Hisob',
        'happened_at' => 'Sana',
        'description' => 'Tavsif',
        'type' => 'Turi',
        'wallet' => 'Hamyon',
        'from_wallet' => 'Hamyondan',
        'to_wallet' => 'Hamyonga',
        'note' => 'Izoh',
        'attachment' => 'Ilova',
    ],
    'types' => [
        TransactionTypeEnum::DEPOSIT->value => [
            'id' => TransactionTypeEnum::DEPOSIT->value,
            'label' => 'To‘ldirish',
            'description' => 'Hamyoningizni to‘ldirish',
        ],
        TransactionTypeEnum::WITHDRAW->value => [
            'id' => TransactionTypeEnum::WITHDRAW->value,
            'label' => 'Yechib olish',
            'description' => 'Hamyoningizdan mablag‘ yechib olish',
        ],
        TransactionTypeEnum::TRANSFER->value => [
            'id' => TransactionTypeEnum::TRANSFER->value,
            'label' => 'O‘tkazma',
            'description' => 'Hamyonlaringiz o‘rtasida o‘tkazma',
        ],
        TransactionTypeEnum::PAYMENT->value => [
            'id' => TransactionTypeEnum::PAYMENT->value,
            'label' => 'To‘lov',
            'description' => 'Bir hamyondan boshqasiga to‘lov',
        ],
    ],
    'tabs' => [
        'all' => 'Barchasi',
        'withdraw' => 'Xarajatlar',
        'deposit' => 'Daromadlar',
    ],
];
