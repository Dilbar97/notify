<?php

namespace handlers;

use components\Logger;
use interfaces\MessageInterface;

class MessageHandler
{
    /**
    Handle a payload, send the message and return result
     */
    public function handle(MessageInterface $payload): string
    {
        $logger = Logger::getLogger();

        $message = $payload->getMessage();
        if ($message == "") {
            $logger->error("No message provided");
            return "No message provided";
        }

        $messengerType = $payload->getType($message);
        if (empty($messengerType)) {
            $logger->error("Invalid notifier type provided");
            return "Invalid notifier type provided";
        }

        $err = $messengerType->sendMessage($message);
        if ($err != "") {
            $logger->error("Error on sending notification");
            return $err;
        }

        return "";
    }
}
