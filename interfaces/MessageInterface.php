<?php

namespace interfaces;

use components\Creator;

interface MessageInterface
{
    public function getType(string $message);
    public function getMessage(): string;
}
