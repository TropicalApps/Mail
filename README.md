## TropicalApps\Mail ##
Extended Laravel 5 Mail class with Postmark support... more soon.

### About ###

This package don't replace the Laravel Mail class this is only an extension to add support to more mail services like "postmark". 

#### Install ####

    composer require tropicalapps/mail

### config/app.php ###
Change this line

    Illuminate\Mail\MailServiceProvider::class
With this

    \TropicalApps\Mail\CustomMailServiceProvider::class,

### config/services.php ###
Add the Postmark service configuration

    'postmark' => [
        'token' => env('POSTMARK_TOKEN')
    ]

### .env file ###
Add the follow vars to your environment configuration file

    MAIL_FROM=your@mail.com
    POSTMARK_TOKEN=ac497d4b-625c-4f41-9f59-4dad3660a665

### Usage ###
Just select "postmark" as your mail driver by changing the follow var in the .env file

    MAIL_DRIVER=postmark
    
### Info ###

 - You need to create an account in : https://postmarkapp.com/
 - The mail account used in the MAIL_FROM variable should be confirmmed and you can't use public email domains like gmail, outlook, etc. 
 
 For more info go to https://postmarkapp.com/
