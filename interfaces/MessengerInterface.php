<?php

namespace interfaces;

interface MessengerInterface
{
    public function send(string $message): string;
}
