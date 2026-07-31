<?php

use App\Enums\BudgetPeriodEnum;
use App\Enums\SpendTypeEnum;
use App\Enums\VisibilityStatusEnum;

return [
    'title' => 'Буҷетҳо',
    'title_singular' => 'Буҷет',
    'fields' => [
        'name' => 'Ном',
        'amount' => 'Маблағ',
        'actual_amount' => 'Маблағи воқеӣ',
        'spend_amount' => 'Маблағи сарфшуда',
        'period' => 'Давра',
        'day_of_month' => 'Рӯзи моҳ',
        'day_of_week' => 'Рӯзи ҳафта',
        'month_of_year' => 'Моҳи сол',
        'month_of_quarter' => 'Моҳи семоҳа',
        'status' => 'Ҳолат',
        'color' => 'Ранг',
        'categories' => 'Категорияҳо',
        'recurrence' => 'Такроршавӣ',
        'enabled' => 'Фаъол?',
        'enabled_help_text' => 'Ин буҷетро дар панели идоракунӣ ё ҳисобот нишон диҳед',
    ],
    'periods' => [
        BudgetPeriodEnum::WEEKLY->value    => 'Ҳафтаина',
        BudgetPeriodEnum::MONTHLY->value   => 'Моҳона',
        BudgetPeriodEnum::QUARTERLY->value => 'Семоҳа',
        BudgetPeriodEnum::YEARLY->value    => 'Солона',
    ],
];
