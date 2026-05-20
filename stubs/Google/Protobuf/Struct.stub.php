<?php

namespace Google\Protobuf;

/**
 * Represents a JSON object.
 * An unordered key-value map, intending to perfectly capture the semantics of a
 * JSON object. This enables parsing any arbitrary JSON payload as a message
 * field in ProtoJSON format.
 * This follows RFC 8259 guidelines for interoperable JSON: notably this type
 * cannot represent large Int64 values or `NaN`/`Infinity` numbers,
 * since the JSON format generally does not support those values in its number
 * type.
 * If you do not intend to parse arbitrary JSON into your message, a custom
 * typed message should be preferred instead of using this type.
 *
 * Generated from protobuf message <code>google.protobuf.Struct</code>
 */
final class Struct extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $fields
     *           Unordered map of dynamically typed values.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * Unordered map of dynamically typed values.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> fields = 1;</code>
     * @return \Google\Protobuf\Internal\MapField<string, \Google\Protobuf\Value>
     */
    public function getFields(): \Google\Protobuf\Internal\MapField {}

    /**
     * Unordered map of dynamically typed values.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> fields = 1;</code>
     */
    public function setFields(array|\Google\Protobuf\Internal\MapField $var): static {}
}
