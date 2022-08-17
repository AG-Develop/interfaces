<?php

namespace AgDevelop\Interface\Json;

use stdClass;

interface DeserializerBuilderInterface
{
    public function build(array|string|stdClass $json): DeserializerInterface;
}
