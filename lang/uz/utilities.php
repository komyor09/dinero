<?php

use App\Enums\MonthEnum;
use App\Enums\QuarterEnum;
use App\Enums\VisibilityStatusEnum;
use App\Enums\WeekdayEnum;

return [
    'visibility_statuses' => [
        VisibilityStatusEnum::ACTIVE->value   => 'Faol',
        VisibilityStatusEnum::INACTIVE->value => 'Faol emas',
    ],
    'weekdays' => [
        WeekdayEnum::SUNDAY->value    => 'Yakshanba',
        WeekdayEnum::MONDAY->value    => 'Dushanba',
        WeekdayEnum::TUESDAY->value   => 'Seshanba',
        WeekdayEnum::WEDNESDAY->value => 'Chorshanba',
        WeekdayEnum::THURSDAY->value  => 'Payshanba',
        WeekdayEnum::FRIDAY->value    => 'Juma',
        WeekdayEnum::SATURDAY->value  => 'Shanba',
    ],
    'months' => [
        MonthEnum::JANUARY->value   => 'Yanvar',
        MonthEnum::FEBRUARY->value  => 'Fevral',
        MonthEnum::MARCH->value     => 'Mart',
        MonthEnum::APRIL->value     => 'Aprel',
        MonthEnum::MAY->value       => 'May',
        MonthEnum::JUNE->value      => 'Iyun',
        MonthEnum::JULY->value      => 'Iyul',
        MonthEnum::AUGUST->value    => 'Avgust',
        MonthEnum::SEPTEMBER->value => 'Sentyabr',
        MonthEnum::OCTOBER->value   => 'Oktyabr',
        MonthEnum::NOVEMBER->value  => 'Noyabr',
        MonthEnum::DECEMBER->value  => 'Dekabr',
    ],
    'quarter_months' => [
        QuarterEnum::FIRST_MONTH->value  => 'Birinchi oy',
        QuarterEnum::SECOND_MONTH->value => 'Ikkinchi oy',
        QuarterEnum::THIRD_MONTH->value  => 'Uchinchi oy',
    ],
];
