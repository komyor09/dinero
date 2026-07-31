<?php

use App\Enums\SpendTypeEnum;

return [
    'title' => 'Kategoriyalar',
    'title_singular' => 'Kategoriya',
    'fields' => [
        'name' => 'Nomi',
        'type' => 'Turi',
        'icon' => 'Belgi',
        'color' => 'Rang',
        'monthly_balance' => 'Oylik balans',
        'total' => 'Jami',
        'is_visible' => 'Ko‘rinsinmi?',
        'is_visible_help_text' => 'Ushbu kategoriyani umumiy balansda hisobga olmaslik va tranzaksiyalar ro‘yxatida ko‘rsatmaslik',
    ],
    'types' => [
        SpendTypeEnum::INCOME->value => [
            'id' => SpendTypeEnum::INCOME->value,
            'label' => 'Daromad',
            'description' => 'daromad kategoriyangiz',
        ],
        SpendTypeEnum::EXPENSE->value => [
            'id' => SpendTypeEnum::EXPENSE->value,
            'label' => 'Xarajat',
            'description' => 'xarajat kategoriyangiz',
        ],
    ],
    'tabs' => [
        'all' => 'Barchasi',
        'expense' => 'Xarajat',
        'income' => 'Daromad',
    ],
];
