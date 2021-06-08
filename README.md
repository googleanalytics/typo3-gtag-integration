# Typo3 Extension Gtag (Google Analytics and Google Ads)
This Extension provides an interface to implement Google Analytics and Google Ads by natively using gtag library. With this extension you can implement Universal Analytics, Google Analytics 4, and Google Ads together.

#### Code Repository: https://github.com/adswerve/google_analytics_and_adwords

#### Extension key: "google_analytics_and_adwords"
## Contact

analytics-help@adswerve.com

## Compatible with

- 10.4*

## Installation
To follow this documentation, you must have TYPO3 up-and-running.
Check out the [link text “Installation & upgrade guide”]: https://docs.typo3.org/m/typo3/guide-installation/master/en-us/QuickInstall/Composer/Index.html#install-via-composer for how to setup a TYPO3 installation with Composer

The system extensions extbase and fluid are required.
To install this extension by cloning the source, open the terminal and go to the directory typo3conf/ext/ and enter:

``` git clone https://github.com/adswerve/google_analytics_and_adwords.git ```

To install this extension by downloading the source, open the url Extension Builder. There you can download a ZIP file, which you can import directly into the Extension Manager. Alternatively you copy the unpacked extension folder to the directory typo3conf/ext/.
Then you can use the Extension Manager to activate the Extension Builder.


## Setup
After activating the extension (and clearing the cache), the plugin can be inserted on a page. Don’t forget to set the sys_folder, where the services are stored as the starting point. This can be done at the end of the plugin entry form in the backend and globally in the page configuration TSConfig:
``` TCEFORM.tt_content.pages.PAGE_TSCONFIG_ID = 3 ```

You must add a sys_folder to your directory to save the field rows to your database. This will persist your Analytics Measurement Info(Measurement Ids, Tracking Ids, Conversion Ids, etc)

You must add this plugin to all pages within your website.
