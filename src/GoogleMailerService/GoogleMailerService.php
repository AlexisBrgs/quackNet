<?php

namespace App\GoogleMailerService;

use Swift_Mailer;


class GoogleMailerService
{
    private $mailer;

    public function __construct(Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function newMail($body)
    {

        $message = new \Swift_Message('Welcome to quack net !');
        $message->setFrom('jeanmichelfedetest@gmail.com');
        $message->setTo('bourgeoisalexis7@gmail.com');
        $message->setBody($body, 'text/html');
        $this->mailer->send($message);
        return $this;
    }


}
