<?php

namespace AgDevelop\Interface\Json;

interface DeserializerBuilderInterface
{
    public function build(string $json): DeserializerInterface;
}
