<?php

use App\Enums\BudgetPeriodEnum;
use App\Enums\SpendTypeEnum;
use App\Enums\VisibilityStatusEnum;

return [
    'title' => 'Бюджеты',
    'title_singular' => 'Бюджет',
    'fields' => [
        'name' => 'Название',
        'amount' => 'Сумма',
        'actual_amount' => 'Фактическая сумма',
        'spend_amount' => 'Потрачено',
        'period' => 'Период',
        'day_of_month' => 'День месяца',
        'day_of_week' => 'День недели',
        'month_of_year' => 'Месяц года',
        'month_of_quarter' => 'Месяц квартала',
        'status' => 'Статус',
        'color' => 'Цвет',
        'categories' => 'Категории',
        'recurrence' => 'Повторение',
        'enabled' => 'Включено?',
        'enabled_help_text' => 'Показывать этот бюджет на панели управления или в отчётах',
    ],
    'periods' => [
        BudgetPeriodEnum::WEEKLY->value    => 'Еженедельно',
        BudgetPeriodEnum::MONTHLY->value   => 'Ежемесячно',
        BudgetPeriodEnum::QUARTERLY->value => 'Ежеквартально',
        BudgetPeriodEnum::YEARLY->value    => 'Ежегодно',
    ],
];
