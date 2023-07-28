<?php

namespace notifiers;

use components\Creator;
use interfaces\MessengerInterface;

class Telegram extends Creator implements MessengerInterface
{
    public function send(string $message): string
    {
        return "Telegram sent!";
    }

    public function getMessenger(): MessengerInterface
    {
        return new Telegram();
    }
}
