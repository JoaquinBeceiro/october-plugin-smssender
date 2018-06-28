# SMSSender for OctoberCMS

## Introduction
This plugin allow you to send SMS easily by [SMSGateway](https://smsgateway.me/).

## SMS GATEWAY
Turn your Android phone into a SMS Gateway.
Send and receive messages programmatically through your phone using API service.

## Installation

-  Download The App From The Android Play Store [here](https://play.google.com/store/apps/details?id=networked.solutions.sms.gateway.api&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1).
-  Install the plugin from October [MarketPlace](https://octobercms.com/plugins) or run `php artisan plugin:install joaquinb.smssender`.
-  Run `composer update` at the plugins root.
-  Sign Up for a free SMS Gateway account [here](https://smsgateway.me/register).
-  Add **SMS_DEVICE_ID** with your device id number found in [Dashboard/devices](https://smsgateway.me/dashboard/devices) into env file.
-  Add **SMS_ACCESS_TOKEN** with your API token found in [Dashboard/settings](https://smsgateway.me/dashboard/settings) into env file.

## Usage
- Manualy in the Backend at SMSSender tab.
- Programmatically by newSms method in Sms controller.
    - `Use Joaquinb\Smssender\Controllers\Sms;`
    - `Sms::newSms(to, msg)` with destination number and message body as parameter.