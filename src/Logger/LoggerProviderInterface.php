<?php

namespace AgDevelop\Interface\Logger;

use Psr\Log\LoggerInterface;

interface LoggerProviderInterface
{
    public function getNewLogger(): LoggerInterface;
}
