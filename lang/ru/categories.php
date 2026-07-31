<?php

use App\Enums\SpendTypeEnum;

return [
    'title' => 'Категории',
    'title_singular' => 'Категория',
    'fields' => [
        'name' => 'Название',
        'type' => 'Тип',
        'icon' => 'Иконка',
        'color' => 'Цвет',
        'monthly_balance' => 'Баланс за месяц',
        'total' => 'Итого',
        'is_visible' => 'Видима?',
        'is_visible_help_text' => 'Не учитывать эту категорию в общем балансе и не показывать её в списке транзакций',
    ],
    'types' => [
        SpendTypeEnum::INCOME->value => [
            'id' => SpendTypeEnum::INCOME->value,
            'label' => 'Доход',
            'description' => 'категория ваших доходов',
        ],
        SpendTypeEnum::EXPENSE->value => [
            'id' => SpendTypeEnum::EXPENSE->value,
            'label' => 'Расход',
            'description' => 'категория ваших расходов',
        ],
    ],
    'tabs' => [
    'all' => 'Все',
    'expense' => 'Расход',
    'income' => 'Доход',
],
];
