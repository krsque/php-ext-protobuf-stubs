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

    public function getLabel(): int {}

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
     * @return Descriptor Returns a descriptor for the field type if the field type is a message, otherwise throws \Exception
     * @throws \Exception
     */
    public function getMessageType(): Descriptor {}
}
