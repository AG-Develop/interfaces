<?php

namespace AgDevelop\Interface\Json;

interface DeserializerInterface
{
    public function deserialize();

    public function getObject(): object;

}