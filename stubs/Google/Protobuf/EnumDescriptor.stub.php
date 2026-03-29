<?php

namespace Google\Protobuf;

final class EnumDescriptor
{
    public function getPublicDescriptor(): self {}

    /**
     * @return int Number of values in enum
     */
    public function getValueCount(): int {}

    /**
     * @param int $index Must be >= 0 and < getValueCount()
     */
    public function getValue(int $index): EnumValueDescriptor {}
}
