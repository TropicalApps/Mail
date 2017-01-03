<?php

namespace TropicalApps\Mail;

use Illuminate\Mail\TransportManager;
use Mail\PostmarkTransport;
use \Postmark\Transport;

/**
* Custom Mail Class
*/
class CustomTransportManager extends TransportManager
{
    /**
     * Create an instance of the Postmark Swift Transport driver.
     *
     * @return \Postmark\Transport instance
     */
    protected function createPostmarkDriver()
    {
        return new Transport(config('services.postmark.token'));
    }
}
