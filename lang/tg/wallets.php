<?php

use App\Enums\WalletTypeEnum;

return [
    'title' => 'Ҳамёнҳо',
    'title_singular' => 'Ҳамён',
    'actions' => [
        'refresh_balance' => 'Навсозии тавозун',
    ],
    'notifications' => [
        'balance_refreshed' => 'Тавозун навсозӣ шуд',
    ],
    'fields' => [
        'name' => 'Ном',
        'type' => 'Навъ',
        'balance' => 'Тавозун',
        'initial_balance' => 'Тавозуни ибтидоӣ',
        'credit_limit' => 'Ҳадди қарзӣ',
        'total_due' => 'Қарзи ҷорӣ',
        'currency_code' => 'Асъор',
        'description' => 'Тавсиф',
        'statement_day_of_month' => 'Рӯзи таҳияи ҳисобот',
        'payment_due_day_of_month' => 'Рӯзи муҳлати пардохт',
        'icon' => 'Нишона',
        'color' => 'Ранг',
        'exclude' => [
            'title' => 'Истисно кардан',
            'help_text' => 'Тавозуни ин ҳамёнро дар тавозуни умумӣ ҳисоб накунед',
        ],
    ],
    'types' => [
        WalletTypeEnum::GENERAL->value => 'Умумӣ',
        WalletTypeEnum::CREDIT_CARD->value => 'Корти қарзӣ',
    ],
    'tabs' => [
        'all' => 'Ҳама',
        'general' => 'Асосӣ',
        'credit_card' => 'Кортҳои бонкӣ',
    ],
];
