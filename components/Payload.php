<?php

namespace components;

use interfaces\MessageInterface;
use notifiers\Telegram;
use notifiers\Whatsapp;

class Payload implements MessageInterface
{
    public $messageType = null;

    /**
    Get type of the message

    @return Creator or empty string
    @throws TypeError Unknown type in Payload
     */
    public function getType(string $message)
    {
        switch ($this->messageType) {
            case "telegram":
                return (new Telegram());
            case "whatsapp":
                return (new Whatsapp());
        }

        return "";
    }

    /**
    Get message text

    @return string
    @throws ValueError Could not get a message from Payload
     */
    public function getMessage(): string
    {
        // and here
        return "";
    }
}
