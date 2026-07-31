<?php

use App\Enums\SpendTypeEnum;

return [
    'title' => 'Категорияҳо',
    'title_singular' => 'Категория',
    'fields' => [
        'name' => 'Ном',
        'type' => 'Навъ',
        'icon' => 'Нишона',
        'color' => 'Ранг',
        'monthly_balance' => 'Тавозуни моҳона',
        'total' => 'Ҳамагӣ',
        'is_visible' => 'Намоён бошад?',
        'is_visible_help_text' => 'Ин категорияро дар тавозуни умумӣ ҳисоб накунед ва онро дар рӯйхати амалиётҳо нишон надиҳед',
    ],
    'types' => [
        SpendTypeEnum::INCOME->value => [
            'id' => SpendTypeEnum::INCOME->value,
            'label' => 'Даромад',
            'description' => 'категорияи даромадҳои шумо',
        ],
        SpendTypeEnum::EXPENSE->value => [
            'id' => SpendTypeEnum::EXPENSE->value,
            'label' => 'Хароҷот',
            'description' => 'категорияи хароҷотҳои шумо',
        ],
    ],
    'tabs' => [
        'all' => 'Ҳама',
        'expense' => 'Хароҷот',
        'income' => 'Даромад',
    ],
];
