# SMSSender for OctoberCMS

## Introduction
This plugin allow you to send SMS easily by [SMSGateway](https://smsgateway.me/).

## SMS GATEWAY
[<img src="https://d2ahgh942lw1b6.cloudfront.net/img/logo.svg " data-canonical-src="https://d2ahgh942lw1b6.cloudfront.net/img/logo.svg " width="100" height="100" />](https://smsgateway.me/)

Turn your Android phone into a SMS Gateway.
Send and receive messages programmatically through your phone using API service.

## Installation

-  Download The App From The Android Play Store [here](https://play.google.com/store/apps/details?id=networked.solutions.sms.gateway.api&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1).
-  Install the plugin from October [MarketPlace](https://octobercms.com/plugins) or run `php artisan plugin:install joaquin.smssender`.
-  Sign Up for a free SMS Gateway account [here](https://smsgateway.me/register).
-  Add **SMS_DEVICE_ID** with your device id number found in [Dashboard/devices](https://smsgateway.me/dashboard/devices) into env file.
-  Add **SMS_ACCESS_TOKEN** with your API token found in [Dashboard/settings](https://smsgateway.me/dashboard/settings) into env file.

## Usage
Click on the toolbar button and manually insert your database credentials.

## Security
You need to be logged on October Backend to access Adminer.

Also, you can give permissions to your backend users but remember, they are going to have access to the whole October database (or databases, depends on your db user privileges).

## Future
The plugin is fully functional but i'm open to suggestions/ideas.