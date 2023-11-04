<?php

namespace Baradaran\Moadian\Dto;

interface PacketDataInterface
{
    /** @return array<string, mixed> */
    public function toArray(): array;
}
