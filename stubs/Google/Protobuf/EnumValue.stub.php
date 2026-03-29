<?php

namespace Google\Protobuf;

/**
 * Enum value definition.
 *
 * Generated from protobuf message <code>google.protobuf.EnumValue</code>
 */
final class EnumValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Enum value name.
     *     @type int $number
     *           Enum value number.
     *     @type array<\Google\Protobuf\Option>|\Google\Protobuf\Internal\RepeatedField $options
     *           Protocol buffer options.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * Enum value name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function getName(): string {}

    /**
     * Enum value name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function setName(string $var): static {}

    /**
     * Enum value number.
     *
     * Generated from protobuf field <code>int32 number = 2;</code>
     */
    public function getNumber(): int {}

    /**
     * Enum value number.
     *
     * Generated from protobuf field <code>int32 number = 2;</code>
     */
    public function setNumber(int $var): static {}

    /**
     * Protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 3;</code>
     */
    public function getOptions(): \Google\Protobuf\Internal\RepeatedField {}

    /**
     * Protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 3;</code>
     * @param array<\Google\Protobuf\Option>|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setOptions($var): static {}
}
