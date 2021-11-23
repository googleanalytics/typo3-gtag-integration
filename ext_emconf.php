<?php
/***************************************************************
 * Extension Manager/Repository config file for ext "google_analytics_and_adwords"
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
  'title' => 'Google Analytics And Adwords',
  'description' => 'An extension to install google analaytics(GA4 and UA) and Google Ads with gtag',
  'category' => 'plugin',
  'author' => 'Matt Krilanovich',
  'author_company' => 'Adswerve',
  'author_email' => 'support@adswerve.com',
  'state' => 'stable',
  'clearCacheOnLoad' => true,
  'version' => '1.0.0',
  'constraints' => [
    'depends' => [
      'typo3' => '10.4.0-11.5.99',
    ],
    'conflicts' => [],
    'suggests' => [],
  ],
  'autoload' => [
    'psr-4' => [
      'Adswerve\\GoogleAnalyticsAndAdwords\\' => 'Classes'
    ],
  ],
];