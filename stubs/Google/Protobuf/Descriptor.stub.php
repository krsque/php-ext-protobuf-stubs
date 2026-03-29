<?php

namespace Google\Protobuf;

final class Descriptor
{
    /**
     * @return string PHP class name
     */
    public function getClass(): string {}

    /**
     * @return string Full protobuf message name
     */
    public function getFullName(): string {}

    /**
     * @param int $index Must be >= 0 and < getFieldCount()
     */
    public function getField(int $index): FieldDescriptor {}

    /**
     * @return int Number of fields in message
     */
    public function getFieldCount(): int {}

    /**
     * @param int $index Must be >= 0 and < getOneofDeclCount()
     */
    public function getOneofDecl(int $index): OneofDescriptor {}

    /**
     * @return int Number of oneofs in message
     */
    public function getOneofDeclCount(): int {}

    public function getPublicDescriptor(): self {}
}
