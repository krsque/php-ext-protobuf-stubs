<?php

namespace Google\Protobuf;

/**
 * Enum value definition.
 * New usages of this message as an alternative to EnumValueDescriptorProto are
 * strongly discouraged. This message does not reliability preserve all
 * information necessary to model the schema and preserve semantics. Instead
 * make use of FileDescriptorSet which preserves the necessary information.
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
     *     @type \Google\Protobuf\Option[] $options
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
     * @return RepeatedField<\Google\Protobuf\Option>
     */
    public function getOptions(): RepeatedField {}

    /**
     * Protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 3;</code>
     * @param list<\Google\Protobuf\Option>|\Google\Protobuf\RepeatedField $var
     */
    public function setOptions(array|RepeatedField $var): static {}
}
