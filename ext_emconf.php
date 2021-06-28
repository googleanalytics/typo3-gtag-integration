<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "google_analytics_and_adwords".
 *
 * Auto generated 04-06-2021 00:35
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Google Analytics And Adwords',
  'description' => 'An extension to install google analaytics(GA4 and UA) and Google Ads with gtag',
  'category' => 'plugin',
  'author' => 'Matt Krilanovich',
  'author_company' => 'Adswerve',
  'author_email' => 'support@adswerve.com',
  'state' => 'stable',
  'clearCacheOnLoad' => true,
  'version' => '1.0.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '10.4.0-10.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'Adswerve\\GoogleAnalyticsAndAdwords\\' => 'Classes',
    ),
  ),
  'uploadfolder' => false,
  'clearcacheonload' => true,
);

