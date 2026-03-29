<?php

namespace Google\Protobuf\Struct;

final class FieldsEntry extends \Google\Protobuf\Internal\Message
{
    public function __construct($data = null) {}

    public function getKey(): string {}

    public function setKey($data): static {}

    /**
     * @return \Google\Protobuf\Value|null
     */
    public function getValue() {}

    /**
     * @param \Google\Protobuf\Value|null $var
     */
    public function setValue($data): static {}

    public function hasValue(): bool {}
}
