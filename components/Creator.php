<?php

namespace components;

use interfaces\MessengerInterface;

abstract class Creator
{
    abstract public function getMessenger(): MessengerInterface;

    public function sendMessage(string $message): string
    {
        $product = $this->getMessenger();
        return $product->send($message);
    }
}
