<?php

namespace Google\Protobuf;

/**
 * A protocol buffer message type.
 * New usages of this message as an alternative to DescriptorProto are strongly
 * discouraged. This message does not reliability preserve all information
 * necessary to model the schema and preserve semantics. Instead make use of
 * FileDescriptorSet which preserves the necessary information.
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
     *     @type \Google\Protobuf\Field[] $fields
     *           The list of fields.
     *     @type string[] $oneofs
     *           The list of types appearing in `oneof` definitions in this type.
     *     @type \Google\Protobuf\Option[] $options
     *           The protocol buffer options.
     *     @type \Google\Protobuf\SourceContext $source_context
     *           The source context.
     *     @type int $syntax
     *           The source syntax.
     *     @type string $edition
     *           The source edition string, only valid when syntax is SYNTAX_EDITIONS.
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
     * @return RepeatedField<\Google\Protobuf\Field>
     */
    public function getFields(): RepeatedField {}

    /**
     * The list of fields.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Field fields = 2;</code>
     * @param list<\Google\Protobuf\Field>|\Google\Protobuf\RepeatedField $var
     */
    public function setFields($var): static {}

    /**
     * The list of types appearing in `oneof` definitions in this type.
     *
     * Generated from protobuf field <code>repeated string oneofs = 3;</code>
     * @return RepeatedField<string>
     */
    public function getOneofs(): RepeatedField {}

    /**
     * The list of types appearing in `oneof` definitions in this type.
     *
     * Generated from protobuf field <code>repeated string oneofs = 3;</code>
     * @param list<string>|\Google\Protobuf\RepeatedField $var
     */
    public function setOneofs($var): static {}

    /**
     * The protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 4;</code>
     * @return RepeatedField<\Google\Protobuf\Option>
     */
    public function getOptions(): RepeatedField {}

    /**
     * The protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 4;</code>
     * @param list<\Google\Protobuf\Option>|\Google\Protobuf\RepeatedField $var
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

    public function hasSourceContext(): bool {}

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

    /**
     * The source edition string, only valid when syntax is SYNTAX_EDITIONS.
     *
     * Generated from protobuf field <code>string edition = 7;</code>
     */
    public function getEdition(): string {}

    /**
     * The source edition string, only valid when syntax is SYNTAX_EDITIONS.
     *
     * Generated from protobuf field <code>string edition = 7;</code>
     */
    public function setEdition(string $var): static {}
}
