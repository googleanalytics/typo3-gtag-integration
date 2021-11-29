# Global Site Tag (gtag.js) (Google Analytics, Google Ads, Google Marketing Platform)
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

- 10.4-10.9|11.5.0

## Installations
### Composer
To follow this documentation, you must have TYPO3 up-and-running.
Check out the [link text “Installation & upgrade guide”]: https://docs.typo3.org/m/typo3/guide-installation/master/en-us/QuickInstall/Composer/Index.html#install-via-composer for how to setup a TYPO3 installation with Composer

The system extensions extbase and fluid are required.
```composer require adswerve/google-analytics-and-adwords```

To install this extension by cloning the source, open the terminal and go to the directory typo3conf/ext/ and enter:
``` git clone https://github.com/adswerve/google_analytics_and_adwords.git .```

To install this extension by downloading the source, open the url Extension Builder. There you can download a ZIP file, which you can import directly into the Extension Manager. Alternatively you copy the unpacked extension folder to the directory typo3conf/ext/.
Then you can use the Extension Manager to activate the Extension Builder.


### TER
1. To download the extension with TER

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Extension Manager

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i. As a user with admin rights, navigate to the Extensions module.

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i. In the select box, navigate to the Get Extensions sub-module.

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iii. Click on "Update now“

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iv. Enter the key google_analytics_and_adwords in the search field.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v. Click the cloud icon in the hit list to import and install the extension.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. From the TYPO3 Extension Repository (https://extensions.typo3.org/)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i. Search for the key google_analytics_and_adwords<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ii. Download the ZIP file.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iii. Unpack the ZIP file and move the content into the TYPO3 extension directory (typo3conf/ext/).<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iv. Navigate in the TYPO3 Backend as a user with admin rights into the module Extensions.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v. Look for the extension google_analytics_and_adwords<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vi. Click on the cube icon with the plus to install the extension<br>

2. After successfully downloading the extension in step 1, go to "List" Modules within your Typo3 backend.
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Create a Sys Folder within any of your folders containing data and name it "Services"<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i. I arbitrarily used my "Shared Content" folder but you could use any folder.<br>
![step1_ext](https://user-images.githubusercontent.com/60241457/123701755-2023da00-d817-11eb-9e4e-81966023d84b.png) <br><br>
3. After Creating your Services folder, right click on the folder and enable it<br>
![step2_ext](https://user-images.githubusercontent.com/60241457/123702569-2797b300-d818-11eb-88e8-7c8d441996d2.png) <br><br>

4. To enter your Measurement ID(GA4) or Tracking ID(UA). Click the "+" icon to create a record to store your Measurement ID.<br>
![step4_ext](https://user-images.githubusercontent.com/60241457/123705532-f0c39c00-d81b-11eb-8249-b4416f08435e.png)<br><br>

5. Find the "Global Site Tag (gtag.js) and click on Service.<br>
![gtag_service](https://user-images.githubusercontent.com/60241457/123926107-6b85d780-d940-11eb-90cb-b9428634dbf3.png)
<br><br>

6. Enter your ID and Click Save
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Depending on your service (GA4, UA, Google Ads), you'll need to make sure you enter the correct format.<br>
![Screen Shot 2021-06-28 at 2 20 54 PM](https://user-images.githubusercontent.com/60241457/123705645-1781d280-d81c-11eb-9f3e-7b2370d98d32.png)<br><br>

7. Click Close<br>
![Screen Shot 2021-06-28 at 2 21 25 PM](https://user-images.githubusercontent.com/60241457/123705761-32ecdd80-d81c-11eb-9690-2bd7706ed6d5.png)<br><br>

8. You now have stored your ID, this record is added into a relational database and will be referenced when adding the plugin to any page you want to track.

9. After activating the extension (and clearing the cache), the plugin can be inserted on a page. Don’t forget to set the sys_folder, where the services are stored as the starting point. This can be done at the end of the plugin entry form in the backend and globally in the page configuration TSConfig:
``` TCEFORM.tt_content.pages.PAGE_TSCONFIG_ID = 3 ```<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Note: Your PID may not be 3, you need to look at where your Services folder is by clicking into the folder and look at the top right.<br>
![s](https://user-images.githubusercontent.com/60241457/123713162-aa286e80-d828-11eb-8bd9-63d71e2ee004.png)<br><br>

You must add this plugin to all pages within your website.

## Version
v1.0
