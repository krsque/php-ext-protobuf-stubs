<?php

namespace Google\Protobuf;

final class OneofDescriptor
{
    /**
     * @return string The name of the oneof
     */
    public function getName(): string {}

    /**
     * @param int $index Must be >= 0 and < getFieldCount()
     */
    public function getField(int $index): FieldDescriptor {}

    /**
     * @return int Number of fields in the oneof
     */
    public function getFieldCount(): int {}
}
