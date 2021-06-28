# Typo3 Extension Gtag (Google Analytics and Google Ads)
This Extension provides an interface to implement Google Analytics and Google Ads by natively using gtag library. With this extension you can implement Universal Analytics, Google Analytics 4, and Google Ads together.

#### Code Repository: https://github.com/adswerve/google_analytics_and_adwords

#### Extension key: "google_analytics_and_adwords"
## Contact

analytics-help@adswerve.com
## Requirements
1. You have a Typo3 site up and running prior to extension installation
2. You are using Typo3 version 10.4 - 10.9
3. You have created a Google Analytics Account and created a [Google Analytics Property](https://support.google.com/analytics/answer/10089681?hl=en).
* It is recommended to use the New Google Analytics (GA4) instead of the Universal Analytics property.
* To use the New Google Analytics (GA4) with this extension, follow this [guide](https://support.google.com/analytics/answer/9304153) to make sure you have your Measurement ID (ex. G-XXXXXX)
* You can still use the [Universal Analytics] (https://support.google.com/analytics/answer/10269537) properties as well. You'll need to have your Tracking ID created. (ex. UA-XXXXXXX)
## Compatible with

- 10.4-10.9

## Installation
To follow this documentation, you must have TYPO3 up-and-running.
Check out the [link text “Installation & upgrade guide”]: https://docs.typo3.org/m/typo3/guide-installation/master/en-us/QuickInstall/Composer/Index.html#install-via-composer for how to setup a TYPO3 installation with Composer

The system extensions extbase and fluid are required.
To install this extension by cloning the source, open the terminal and go to the directory typo3conf/ext/ and enter:

``` git clone https://github.com/adswerve/google_analytics_and_adwords.git ```

To install this extension by downloading the source, open the url Extension Builder. There you can download a ZIP file, which you can import directly into the Extension Manager. Alternatively you copy the unpacked extension folder to the directory typo3conf/ext/.
Then you can use the Extension Manager to activate the Extension Builder.


## Installation Guide
1. To download the extension (TER, ….)<br>
⋅⋅⋅a. Extension Manager<br>
⋅⋅⋅⋅⋅⋅i. As a user with admin rights, navigate to the Extensions module.<br>
⋅⋅⋅⋅⋅⋅i. In the select box, navigate to the Get Extensions sub-module.>br?
⋅⋅⋅⋅⋅⋅iii. Click on "Update now“<br>
⋅⋅⋅⋅⋅⋅iv. Enter the key google_analytics_and_adwords in the search field.<br>
⋅⋅⋅⋅⋅⋅v. Click the cloud icon in the hit list to import and install the extension.<br>

⋅⋅⋅b. From the TYPO3 Extension Repository (https://extensions.typo3.org/)<br>
⋅⋅⋅⋅⋅⋅i. Search for the key google_analytics_and_adwords<br>
⋅⋅⋅⋅⋅⋅ii. Download the ZIP file.<br>
⋅⋅⋅⋅⋅⋅iii. Unpack the ZIP file and move the content into the TYPO3 extension directory (typo3conf/ext/).<br>
⋅⋅⋅⋅⋅⋅iv. Navigate in the TYPO3 Backend as a user with admin rights into the module Extensions.<br>
⋅⋅⋅⋅⋅⋅v. Look for the extension google_analytics_and_adwords<br>
⋅⋅⋅⋅⋅⋅vi. Click on the cube icon with the plus to install the extension<br>

2. After successfully downloading the extension in step 1, go to "List" Modules within your Typo3 backend.
⋅⋅⋅a. Create a Sys Folder within any of your folders containing data and name it "Services"<br>
⋅⋅⋅⋅⋅⋅i. I arbitrarily used my "Shared Content" folder but you could use any folder.<br>
![step1_ext](https://user-images.githubusercontent.com/60241457/123701755-2023da00-d817-11eb-9e4e-81966023d84b.png) <br>
3. After Creating your Services folder, right click on the folder and enable it
![step2_ext](https://user-images.githubusercontent.com/60241457/123702569-2797b300-d818-11eb-88e8-7c8d441996d2.png) <br>

4. To enter your Measurement ID (GA4, blah blah blah). Click the "+" icon to create a record to store your Measurement ID.

5. Find the "Global Site Tag (gtag.js) and click on Service.

6. Enter your ID and Click Save
⋅⋅⋅Depending on your service (GA4, UA, Google Ads), you'll need to make sure you enter the correct format.

7. Click Close

8. You now have stored your ID, this record is added into a relational database and will be referenced when adding the plugin to any page you want to track.


9. After activating the extension (and clearing the cache), the plugin can be inserted on a page. Don’t forget to set the sys_folder, where the services are stored as the starting point. This can be done at the end of the plugin entry form in the backend and globally in the page configuration TSConfig:
``` TCEFORM.tt_content.pages.PAGE_TSCONFIG_ID = 3 ```

You must add a sys_folder to your directory to save the field rows to your database. This will persist your Analytics Measurement Info(Measurement Ids, Tracking Ids, Conversion Ids, etc)

You must add this plugin to all pages within your website.

