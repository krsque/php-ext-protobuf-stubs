<?php

namespace Google\Protobuf;

/**
 * A single field of a message type.
 * New usages of this message as an alternative to FieldDescriptorProto are
 * strongly discouraged. This message does not reliability preserve all
 * information necessary to model the schema and preserve semantics. Instead
 * make use of FileDescriptorSet which preserves the necessary information.
 *
 * Generated from protobuf message <code>google.protobuf.Field</code>
 */
final class Field extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kind
     *           The field type.
     *     @type int $cardinality
     *           The field cardinality.
     *     @type int $number
     *           The field number.
     *     @type string $name
     *           The field name.
     *     @type string $type_url
     *           The field type URL, without the scheme, for message or enumeration
     *           types. Example: `"type.googleapis.com/google.protobuf.Timestamp"`.
     *     @type int $oneof_index
     *           The index of the field type in `Type.oneofs`, for message or enumeration
     *           types. The first type has index 1; zero means the type is not in the list.
     *     @type bool $packed
     *           Whether to use alternative packed wire representation.
     *     @type \Google\Protobuf\Option[] $options
     *           The protocol buffer options.
     *     @type string $json_name
     *           The field JSON name.
     *     @type string $default_value
     *           The string value of the default value of this field. Proto2 syntax only.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The field type.
     *
     * Generated from protobuf field <code>.google.protobuf.Field.Kind kind = 1;</code>
     */
    public function getKind(): int {}

    /**
     * The field type.
     *
     * Generated from protobuf field <code>.google.protobuf.Field.Kind kind = 1;</code>
     */
    public function setKind(int $var): static {}

    /**
     * The field cardinality.
     *
     * Generated from protobuf field <code>.google.protobuf.Field.Cardinality cardinality = 2;</code>
     */
    public function getCardinality(): int {}

    /**
     * The field cardinality.
     *
     * Generated from protobuf field <code>.google.protobuf.Field.Cardinality cardinality = 2;</code>
     */
    public function setCardinality(int $var): static {}

    /**
     * The field number.
     *
     * Generated from protobuf field <code>int32 number = 3;</code>
     */
    public function getNumber(): int {}

    /**
     * The field number.
     *
     * Generated from protobuf field <code>int32 number = 3;</code>
     */
    public function setNumber(int $var): static {}

    /**
     * The field name.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    public function getName(): string {}

    /**
     * The field name.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    public function setName(string $var): static {}

    /**
     * The field type URL, without the scheme, for message or enumeration
     * types. Example: `"type.googleapis.com/google.protobuf.Timestamp"`.
     *
     * Generated from protobuf field <code>string type_url = 6;</code>
     */
    public function getTypeUrl(): string {}

    /**
     * The field type URL, without the scheme, for message or enumeration
     * types. Example: `"type.googleapis.com/google.protobuf.Timestamp"`.
     *
     * Generated from protobuf field <code>string type_url = 6;</code>
     */
    public function setTypeUrl(string $var): static {}

    /**
     * The index of the field type in `Type.oneofs`, for message or enumeration
     * types. The first type has index 1; zero means the type is not in the list.
     *
     * Generated from protobuf field <code>int32 oneof_index = 7;</code>
     */
    public function getOneofIndex(): int {}

    /**
     * The index of the field type in `Type.oneofs`, for message or enumeration
     * types. The first type has index 1; zero means the type is not in the list.
     *
     * Generated from protobuf field <code>int32 oneof_index = 7;</code>
     */
    public function setOneofIndex(int $var): static {}

    /**
     * Whether to use alternative packed wire representation.
     *
     * Generated from protobuf field <code>bool packed = 8;</code>
     */
    public function getPacked(): bool {}

    /**
     * Whether to use alternative packed wire representation.
     *
     * Generated from protobuf field <code>bool packed = 8;</code>
     */
    public function setPacked(bool $var): static {}

    /**
     * The protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 9;</code>
     * @return RepeatedField<\Google\Protobuf\Option>
     */
    public function getOptions(): RepeatedField {}

    /**
     * The protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 9;</code>
     * @param list<\Google\Protobuf\Option>|\Google\Protobuf\RepeatedField $var
     */
    public function setOptions($var): static {}

    /**
     * The field JSON name.
     *
     * Generated from protobuf field <code>string json_name = 10;</code>
     */
    public function getJsonName(): string {}

    /**
     * The field JSON name.
     *
     * Generated from protobuf field <code>string json_name = 10;</code>
     */
    public function setJsonName(string $var): static {}

    /**
     * The string value of the default value of this field. Proto2 syntax only.
     *
     * Generated from protobuf field <code>string default_value = 11;</code>
     */
    public function getDefaultValue(): string {}

    /**
     * The string value of the default value of this field. Proto2 syntax only.
     *
     * Generated from protobuf field <code>string default_value = 11;</code>
     */
    public function setDefaultValue(string $var): static {}
}
