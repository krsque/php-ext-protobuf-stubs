<?php

namespace Google\Protobuf;

/**
 * Enum type definition.
 *
 * Generated from protobuf message <code>google.protobuf.Enum</code>
 */
final class Enum extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Enum type name.
     *     @type array<\Google\Protobuf\EnumValue>|\Google\Protobuf\Internal\RepeatedField $enumvalue
     *           Enum value definitions.
     *     @type array<\Google\Protobuf\Option>|\Google\Protobuf\Internal\RepeatedField $options
     *           Protocol buffer options.
     *     @type \Google\Protobuf\SourceContext $source_context
     *           The source context.
     *     @type int $syntax
     *           The source syntax.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * Enum type name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function getName(): string {}

    /**
     * Enum type name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function setName(string $var): static {}

    /**
     * Enum value definitions.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.EnumValue enumvalue = 2;</code>
     */
    public function getEnumvalue(): \Google\Protobuf\Internal\RepeatedField {}

    /**
     * Enum value definitions.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.EnumValue enumvalue = 2;</code>
     * @param array<\Google\Protobuf\EnumValue>|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setEnumvalue($var): static {}

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

    /**
     * The source context.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 4;</code>
     * @return \Google\Protobuf\SourceContext|null
     */
    public function getSourceContext() {}

    /**
     * The source context.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 4;</code>
     */
    public function setSourceContext(\Google\Protobuf\SourceContext $var): static {}

    /**
     * The source syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 5;</code>
     */
    public function getSyntax(): int {}

    /**
     * The source syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 5;</code>
     */
    public function setSyntax(int $var): static {}
}
