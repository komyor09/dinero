<?php

use App\Enums\MonthEnum;
use App\Enums\QuarterEnum;
use App\Enums\VisibilityStatusEnum;
use App\Enums\WeekdayEnum;

return [
    'visibility_statuses' => [
        VisibilityStatusEnum::ACTIVE->value   => 'Активный',
        VisibilityStatusEnum::INACTIVE->value => 'Неактивный',
    ],
    'weekdays' => [
        WeekdayEnum::SUNDAY->value    => 'Воскресенье',
        WeekdayEnum::MONDAY->value    => 'Понедельник',
        WeekdayEnum::TUESDAY->value   => 'Вторник',
        WeekdayEnum::WEDNESDAY->value => 'Среда',
        WeekdayEnum::THURSDAY->value  => 'Четверг',
        WeekdayEnum::FRIDAY->value    => 'Пятница',
        WeekdayEnum::SATURDAY->value  => 'Суббота',
    ],
    'months' => [
        MonthEnum::JANUARY->value   => 'Январь',
        MonthEnum::FEBRUARY->value  => 'Февраль',
        MonthEnum::MARCH->value     => 'Март',
        MonthEnum::APRIL->value     => 'Апрель',
        MonthEnum::MAY->value       => 'Май',
        MonthEnum::JUNE->value      => 'Июнь',
        MonthEnum::JULY->value      => 'Июль',
        MonthEnum::AUGUST->value    => 'Август',
        MonthEnum::SEPTEMBER->value => 'Сентябрь',
        MonthEnum::OCTOBER->value   => 'Октябрь',
        MonthEnum::NOVEMBER->value  => 'Ноябрь',
        MonthEnum::DECEMBER->value  => 'Декабрь',
    ],
    'quarter_months' => [
        QuarterEnum::FIRST_MONTH->value  => 'Первый месяц',
        QuarterEnum::SECOND_MONTH->value => 'Второй месяц',
        QuarterEnum::THIRD_MONTH->value  => 'Третий месяц',
    ],
];
