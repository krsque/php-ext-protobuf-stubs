<?php

namespace Google\Protobuf;

/**
 * `Value` represents a dynamically typed value which can be either
 * null, a number, a string, a boolean, a recursive struct value, or a
 * list of values. A producer of value is expected to set one of these
 * variants. Absence of any variant indicates an error.
 * The JSON representation for `Value` is JSON value.
 *
 * Generated from protobuf message <code>google.protobuf.Value</code>
 */
final class Value extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $null_value
     *           Represents a null value.
     *     @type float $number_value
     *           Represents a double value.
     *     @type string $string_value
     *           Represents a string value.
     *     @type bool $bool_value
     *           Represents a boolean value.
     *     @type \Google\Protobuf\Struct $struct_value
     *           Represents a structured value.
     *     @type \Google\Protobuf\ListValue $list_value
     *           Represents a repeated `Value`.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * Represents a null value.
     *
     * Generated from protobuf field <code>.google.protobuf.NullValue null_value = 1;</code>
     */
    public function getNullValue(): int {}

    /**
     * Represents a null value.
     *
     * Generated from protobuf field <code>.google.protobuf.NullValue null_value = 1;</code>
     */
    public function setNullValue(int $var): static {}

    public function hasNullValue(): bool {}

    /**
     * Represents a double value.
     *
     * Generated from protobuf field <code>double number_value = 2;</code>
     */
    public function getNumberValue(): float {}

    /**
     * Represents a double value.
     *
     * Generated from protobuf field <code>double number_value = 2;</code>
     */
    public function setNumberValue(float $var): static {}

    public function hasNumberValue(): bool {}

    /**
     * Represents a string value.
     *
     * Generated from protobuf field <code>string string_value = 3;</code>
     */
    public function getStringValue(): string {}

    /**
     * Represents a string value.
     *
     * Generated from protobuf field <code>string string_value = 3;</code>
     */
    public function setStringValue(string $var): static {}

    public function hasStringValue(): bool {}

    /**
     * Represents a boolean value.
     *
     * Generated from protobuf field <code>bool bool_value = 4;</code>
     */
    public function getBoolValue(): bool {}

    /**
     * Represents a boolean value.
     *
     * Generated from protobuf field <code>bool bool_value = 4;</code>
     */
    public function setBoolValue(bool $var): static {}

    public function hasBoolValue(): bool {}

    /**
     * Represents a structured value.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct struct_value = 5;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getStructValue() {}

    /**
     * Represents a structured value.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct struct_value = 5;</code>
     */
    public function setStructValue(\Google\Protobuf\Struct $var): static {}

    public function hasStructValue(): bool {}

    /**
     * Represents a repeated `Value`.
     *
     * Generated from protobuf field <code>.google.protobuf.ListValue list_value = 6;</code>
     * @return \Google\Protobuf\ListValue|null
     */
    public function getListValue() {}

    /**
     * Represents a repeated `Value`.
     *
     * Generated from protobuf field <code>.google.protobuf.ListValue list_value = 6;</code>
     */
    public function setListValue(\Google\Protobuf\ListValue $var): static {}

    public function hasListValue(): bool {}

    /**
     * @return string The field name in the oneof.
     */
    public function getKind(): string {}
}
