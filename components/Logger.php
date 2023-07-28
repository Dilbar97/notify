<?php

namespace components;

use Analog\Handler\File;

class Logger
{
    private static $logger;

    protected function __construct()
    {
        self::$logger = new \Analog\Logger();
        self::$logger->handler(File::init("logs.log"));
    }

    protected function __clone() { }

    public static function getLogger()
    {
        if (!empty(self::$logger)) {
            self::$logger = new self();
        }

        return self::$logger;
    }
}
