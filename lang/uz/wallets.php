<?php

use App\Enums\WalletTypeEnum;

return [
    'title' => 'Hamyonlar',
    'title_singular' => 'Hamyon',
    'actions' => [
        'refresh_balance' => 'Balansni yangilash',
    ],
    'notifications' => [
        'balance_refreshed' => 'Balans yangilandi',
    ],
    'fields' => [
        'name' => 'Nomi',
        'type' => 'Turi',
        'balance' => 'Balans',
        'initial_balance' => 'Boshlang‘ich balans',
        'credit_limit' => 'Kredit limiti',
        'total_due' => 'Joriy qarzdorlik',
        'currency_code' => 'Valyuta',
        'description' => 'Tavsif',
        'statement_day_of_month' => 'Hisobot kuni',
        'payment_due_day_of_month' => 'To‘lov muddati kuni',
        'icon' => 'Belgi',
        'color' => 'Rang',
        'exclude' => [
            'title' => 'Istisno qilish',
            'help_text' => 'Ushbu hamyon balansini umumiy balansga qo‘shmaslik',
        ],
    ],
    'types' => [
        WalletTypeEnum::GENERAL->value => 'Oddiy',
        WalletTypeEnum::CREDIT_CARD->value => 'Kredit karta',
    ],
    'tabs' => [
        'all' => 'Barchasi',
        'general' => 'Asosiy',
        'credit_card' => 'Bank kartalari',
    ],
];
