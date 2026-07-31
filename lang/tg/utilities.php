<?php

use App\Enums\MonthEnum;
use App\Enums\QuarterEnum;
use App\Enums\VisibilityStatusEnum;
use App\Enums\WeekdayEnum;

return [
    'visibility_statuses' => [
        VisibilityStatusEnum::ACTIVE->value   => 'Фаъол',
        VisibilityStatusEnum::INACTIVE->value => 'Ғайрифаъол',
    ],
    'weekdays' => [
        WeekdayEnum::SUNDAY->value    => 'Якшанбе',
        WeekdayEnum::MONDAY->value    => 'Душанбе',
        WeekdayEnum::TUESDAY->value   => 'Сешанбе',
        WeekdayEnum::WEDNESDAY->value => 'Чоршанбе',
        WeekdayEnum::THURSDAY->value  => 'Панҷшанбе',
        WeekdayEnum::FRIDAY->value    => 'Ҷумъа',
        WeekdayEnum::SATURDAY->value  => 'Шанбе',
    ],
    'months' => [
        MonthEnum::JANUARY->value   => 'Январ',
        MonthEnum::FEBRUARY->value  => 'Феврал',
        MonthEnum::MARCH->value     => 'Март',
        MonthEnum::APRIL->value     => 'Апрел',
        MonthEnum::MAY->value       => 'Май',
        MonthEnum::JUNE->value      => 'Июн',
        MonthEnum::JULY->value      => 'Июл',
        MonthEnum::AUGUST->value    => 'Август',
        MonthEnum::SEPTEMBER->value => 'Сентябр',
        MonthEnum::OCTOBER->value   => 'Октябр',
        MonthEnum::NOVEMBER->value  => 'Ноябр',
        MonthEnum::DECEMBER->value  => 'Декабр',
    ],
    'quarter_months' => [
        QuarterEnum::FIRST_MONTH->value  => 'Моҳи якум',
        QuarterEnum::SECOND_MONTH->value => 'Моҳи дуюм',
        QuarterEnum::THIRD_MONTH->value  => 'Моҳи сеюм',
    ],
];
