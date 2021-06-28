<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:google_analytics_and_adwords/Resources/Private/Language/locallang_db.xlf:tx_googleanalyticsandadwords_domain_model_service',
        'label' => 'service_id',
        'iconfile' => 'EXT:google_analytics_and_adwords/Resources/Public/Icons/Extension.svg',
    ],
    'columns' => [
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
    ],
    'types' => [
        '0' => ['showitem' => 'service_id'],
    ],
];