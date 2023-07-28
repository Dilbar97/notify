<?php

namespace notifiers;

use components\Creator;
use interfaces\MessengerInterface;

class Whatsapp extends Creator implements MessengerInterface
{
    public function send(string $message): string
    {
        return "Whatsapp sent!";
    }

    public function getMessenger(): MessengerInterface
    {
        return new Whatsapp();
    }
}
