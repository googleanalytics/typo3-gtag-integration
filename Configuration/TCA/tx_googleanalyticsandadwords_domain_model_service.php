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
            'onChange' => 'reload',
            'config' => [
                'type' => 'radio',
                'default' => 'google-analytics',
                'items' => [
                    ['Google Analytics', 'google-analytics'],
                    ['Google Ads', 'google-ads'],
                ],
            ],
            
        ],
        'ga_version' => [
            'label' => 'LLL:EXT:google_analytics_and_adwords/Resources/Private/Language/locallang_db.xlf:tx_googleanalyticsandadwords_domain_model_service.ga_version',
            'description' => 'Which version of Google Analytics?',
            'config' => [
                'type' => 'radio',
                'default' => 'ga4',
                'items' => [
                    ['Google Analytics 4', 'ga4'],
                    ['Universal Analytics', 'ua'],
                ],
            ],
            'displayCond' => 'FIELD:product:=:google-analytics',
        ],
        'service_id' => [
            'label' => 'LLL:EXT:google_analytics_and_adwords/Resources/Private/Language/locallang_db.xlf:tx_googleanalyticsandadwords_domain_model_service.service_id',
            'description' => 'Google Analytics 4 (G-XXXXXXXXX)
            Universal Analytics (UA-XXXXXXXXX)
            Google Ads (AW-XXXXXXXXX)',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
            ],
        ],
        'conversion_label' => [
            'label' => 'LLL:EXT:google_analytics_and_adwords/Resources/Private/Language/locallang_db.xlf:tx_googleanalyticsandadwords_domain_model_service.conversion_label',
            'description' => 'What is the conversion label?',
            'default' => 'CONVERSION_LABEL',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
            ],
            'displayCond' => 'FIELD:product:=:google-ads',
        ],

    ],
    'types' => [
        '0' => ['showitem' => 'product, ga_version, service_id, conversion_label'],
    ],
];