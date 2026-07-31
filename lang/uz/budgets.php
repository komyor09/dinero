<?php

use App\Enums\BudgetPeriodEnum;
use App\Enums\SpendTypeEnum;
use App\Enums\VisibilityStatusEnum;

return [
    'title' => 'Budjetlar',
    'title_singular' => 'Budjet',
    'fields' => [
        'name' => 'Nomi',
        'amount' => 'Summa',
        'actual_amount' => 'Haqiqiy summa',
        'spend_amount' => 'Sarflangan summa',
        'period' => 'Davr',
        'day_of_month' => 'Oy kuni',
        'day_of_week' => 'Hafta kuni',
        'month_of_year' => 'Yil oyi',
        'month_of_quarter' => 'Chorak oyi',
        'status' => 'Holati',
        'color' => 'Rang',
        'categories' => 'Kategoriyalar',
        'recurrence' => 'Takrorlanish',
        'enabled' => 'Faollashtirilganmi?',
        'enabled_help_text' => 'Ushbu budjetni boshqaruv paneli yoki hisobotda ko‘rsatish',
    ],
    'periods' => [
        BudgetPeriodEnum::WEEKLY->value    => 'Haftalik',
        BudgetPeriodEnum::MONTHLY->value   => 'Oylik',
        BudgetPeriodEnum::QUARTERLY->value => 'Choraklik',
        BudgetPeriodEnum::YEARLY->value    => 'Yillik',
    ],
];
