<?php

use App\Enums\WalletTypeEnum;

return [
    'title' => 'Кошельки',
    'title_singular' => 'Кошелёк',
    'actions' => [
        'refresh_balance' => 'Обновить баланс',
    ],
    'notifications' => [
        'balance_refreshed' => 'Баланс обновлён',
    ],
    'fields' => [
        'name' => 'Название',
        'type' => 'Тип',
        'balance' => 'Баланс',
        'initial_balance' => 'Начальный баланс',
        'credit_limit' => 'Кредитный лимит',
        'total_due' => 'Текущая задолженность',
        'currency_code' => 'Валюта',
        'description' => 'Описание',
        'statement_day_of_month' => 'День формирования выписки',
        'payment_due_day_of_month' => 'День обязательного платежа',
        'icon' => 'Иконка',
        'color' => 'Цвет',
        'exclude' => [
            'title' => 'Исключить',
            'help_text' => 'Не учитывать баланс этого кошелька в общем балансе',
        ],
    ],
    'types' => [
        WalletTypeEnum::GENERAL->value => 'Обычный',
        WalletTypeEnum::CREDIT_CARD->value => 'Кредитная карта',
    ],
    'tabs' => [
        'all' => 'Все',
        'general' => 'Основные',
        'credit_card' => 'Банковские карты',
    ],
];
