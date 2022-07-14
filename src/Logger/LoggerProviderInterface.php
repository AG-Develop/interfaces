<?php

namespace AgDevelop\Interface\Json;

use Psr\Log\LoggerInterface;

interface LoggerProviderInterface
{
    public function getNewLogger(): LoggerInterface;
}