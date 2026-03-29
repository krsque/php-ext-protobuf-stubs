<?php

namespace Google\Protobuf;

/**
 * A protocol buffer message type.
 *
 * Generated from protobuf message <code>google.protobuf.Type</code>
 */
final class Type extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The fully qualified message name.
     *     @type array<\Google\Protobuf\Field>|\Google\Protobuf\Internal\RepeatedField $fields
     *           The list of fields.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $oneofs
     *           The list of types appearing in `oneof` definitions in this type.
     *     @type array<\Google\Protobuf\Option>|\Google\Protobuf\Internal\RepeatedField $options
     *           The protocol buffer options.
     *     @type \Google\Protobuf\SourceContext $source_context
     *           The source context.
     *     @type int $syntax
     *           The source syntax.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The fully qualified message name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function getName(): string {}

    /**
     * The fully qualified message name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function setName(string $var): static {}

    /**
     * The list of fields.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Field fields = 2;</code>
     */
    public function getFields(): \Google\Protobuf\Internal\RepeatedField {}

    /**
     * The list of fields.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Field fields = 2;</code>
     * @param array<\Google\Protobuf\Field>|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setFields($var): static {}

    /**
     * The list of types appearing in `oneof` definitions in this type.
     *
     * Generated from protobuf field <code>repeated string oneofs = 3;</code>
     */
    public function getOneofs(): \Google\Protobuf\Internal\RepeatedField {}

    /**
     * The list of types appearing in `oneof` definitions in this type.
     *
     * Generated from protobuf field <code>repeated string oneofs = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setOneofs($var): static {}

    /**
     * The protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 4;</code>
     */
    public function getOptions(): \Google\Protobuf\Internal\RepeatedField {}

    /**
     * The protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 4;</code>
     * @param array<\Google\Protobuf\Option>|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setOptions($var): static {}

    /**
     * The source context.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 5;</code>
     * @return \Google\Protobuf\SourceContext|null
     */
    public function getSourceContext() {}

    /**
     * The source context.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 5;</code>
     */
    public function setSourceContext(\Google\Protobuf\SourceContext $var): static {}

    /**
     * The source syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 6;</code>
     */
    public function getSyntax(): int {}

    /**
     * The source syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 6;</code>
     */
    public function setSyntax(int $var): static {}
}
