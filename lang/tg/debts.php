<?php

use App\Enums\DebtActionTypeEnum;
use App\Enums\DebtTypeEnum;

return [
    'title' => 'Қарзҳо',
    'title_singular' => 'Қарз',
    'actions' => [
        'debt_transaction' => 'Амалиёти қарз',
    ],
    'fields' => [
        'name' => 'Ном',
        'type' => 'Навъ',
        'amount' => 'Маблағ',
        'description' => 'Тавсиф',
        'start_at' => 'Оғоз',
        'color' => 'Ранг',
        'wallet' => 'Ҳамён',
        'initial_wallet' => 'Ҳамёни ибтидоӣ',
        'happened_at' => 'Санаи амалиёт',
        'debt' => 'Қарз',
        'action_type' => 'Навъи амалиёт',
        'from_wallet' => 'Аз ҳамён',
        'total_debt_amount' => 'Маблағи умумии қарз',
    ],
    'types' => [
        DebtTypeEnum::PAYABLE->value => 'Пардохтшаванда',
        DebtTypeEnum::RECEIVABLE->value => 'Қабулшаванда',
    ],
    'action_types' => [
        DebtTypeEnum::RECEIVABLE->value => [
            DebtActionTypeEnum::DEBT_COLLECTION->value => 'Ҷамъоварии қарз',
            DebtActionTypeEnum::LOAN_INCREASE->value   => 'Афзоиши қарз',
            DebtActionTypeEnum::LOAN_INTEREST->value   => 'Фоиз',
        ],
        DebtTypeEnum::PAYABLE->value => [
            DebtActionTypeEnum::REPAYMENT->value     => 'Бозпардохт',
            DebtActionTypeEnum::DEBT_INCREASE->value => 'Афзоиши қарз',
            DebtActionTypeEnum::DEBT_INTEREST->value => 'Фоиз',
        ],
    ],
    'tabs' => [
        'all' => 'Ҳама',
        'payable' => 'Қарздор',
        'receivable' => 'Қарзгиранда',
    ],
];
