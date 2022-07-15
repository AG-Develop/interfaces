<?php

namespace AgDevelop\Interface\Json;

interface SerializerInterface
{
    public function serialize(SerializableInterface $object): string;
}
