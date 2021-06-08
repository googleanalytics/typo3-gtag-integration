<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:google_analytics_and_adwords/Resources/Private/Language/locallang_db.xlf:tx_googleanalyticsandadwords_domain_model_service',
        'label' => 'product',
        'iconfile' => 'EXT:google_analytics_and_adwords/Resources/Public/Icons/Extension.svg',
    ],
    'columns' => [
        'product' => [
            'label' => 'LLL:EXT:google_analytics_and_adwords/Resources/Private/Language/locallang_db.xlf:tx_googleanalyticsandadwords_domain_model_service.product',
            'config' => [
                'type' => 'radio',
                'default' => 'google-analytics',
                'items' => [
                    ['Google Analytics', 'google-analytics'],
                    ['Google Ads', 'google-ads'],
                ],
            ],
        ],
        'service_id' => [
            'label' => 'LLL:EXT:google_analytics_and_adwords/Resources/Private/Language/locallang_db.xlf:tx_googleanalyticsandadwords_domain_model_service.service_id',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'product, service_id'],
    ],
];