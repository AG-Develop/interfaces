<?php

namespace AgDevelop\Interface\Json;

interface DeserializerInterface
{
    public function deserialize(): self;

    public function getObject(): object;

    public function getEnvelope(): EnvelopeInterface;
}
