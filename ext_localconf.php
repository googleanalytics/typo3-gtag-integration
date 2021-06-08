<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Adswerve.GoogleAnalyticsAndAdwords',
            'GoogleServices',
            [
                \Adswerve\GoogleAnalyticsAndAdwords\Controller\GoogleAnalyticsAndAdwordsController::class => 'list',
            ],
            // non-cacheable actions
            [
                \Adswerve\GoogleAnalyticsAndAdwords\Controller\GoogleAnalyticsAndAdwordsController::class => '',
            ]
        );
    }
);