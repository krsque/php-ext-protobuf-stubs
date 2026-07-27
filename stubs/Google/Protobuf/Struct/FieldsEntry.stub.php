<?php

namespace Google\Protobuf\Struct;

final class FieldsEntry extends \Google\Protobuf\Internal\Message
{
    public function __construct($data = null) {}

    public function getKey(): string {}

    public function setKey(string $value): static {}

    public function getValue(): ?\Google\Protobuf\Value {}

    public function setValue(?\Google\Protobuf\Value $value): static {}

    public function hasValue(): bool {}
}
