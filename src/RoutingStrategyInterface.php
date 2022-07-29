<?php

namespace AgDevelop\Interface;

interface RoutingStrategyInterface
{
    public function getRoutingKey(object $object): string;
}
