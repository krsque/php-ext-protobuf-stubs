<?php

namespace Google\Protobuf;

final class FieldDescriptor
{
    /**
     * @return string Field name
     */
    public function getName(): string {}

    /**
     * @return int Protobuf field number
     */
    public function getNumber(): int {}

    public function isRequired(): bool {}

    public function isRepeated(): bool {}

    public function getType(): int {}

    public function isMap(): bool {}

    /**
     * @throws \Exception If field is not an enum type.
     */
    public function getEnumType(): \Google\Protobuf\EnumDescriptor {}

    public function getContainingOneof(): \Google\Protobuf\OneofDescriptor {}

    /**
     * @return \Google\Protobuf\OneofDescriptor|null
     */
    public function getRealContainingOneof() {}

    /**
     * Returns true if this field tracks presence, ie. does the field
     * distinguish between "unset" and "present with default value."
     *
     * This includes required, optional, and oneof fields. It excludes maps,
     * repeated fields, and singular proto3 fields without "optional".
     *
     * For fields where hasPresence() == true, the return value of
     * msg.hasField() is semantically meaningful.
     *
     */
    public function hasPresence(): bool {}

    /**
     * @return Descriptor Returns a descriptor for the field type if the field type is a message, otherwise throws \Exception
     * @throws \Exception
     */
    public function getMessageType(): Descriptor {}
}
