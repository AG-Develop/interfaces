<?php

namespace AgDevelop\Interface\Json;

use DateTimeInterface;

interface EnvelopeInterface
{
    public function getSerializedAt(): DateTimeInterface;

    public function getVersion(): string;
}
