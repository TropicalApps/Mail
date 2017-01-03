<?php

namespace TropicalApps\Mail;

use Swift_Mailer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Mail\MailServiceProvider;
use TropicalApps\Mail\TransportManager;

class CustomMailServiceProvider extends MailServiceProvider
{

    /**
     * Register the Swift Transport instance.
     *
     * @return void
     */
    protected function registerSwiftTransport()
    {
        $this->app['swift.transport'] = $this->app->share(function ($app) {
            return new TransportManager($app);
        });
    }
}
