<?php

namespace TropicalApps\Mail;

use Illuminate\Mail\TransportManager as Manager;
use Mail\PostmarkTransport;
use \Postmark\Transport;

/**
* Custom Mail Class
*/
class TransportManager extends Manager
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
