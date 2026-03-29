<?php

namespace Google\Protobuf;

/**
 * `Struct` represents a structured data value, consisting of fields
 * which map to dynamically typed values. In some languages, `Struct`
 * might be supported by a native representation. For example, in
 * scripting languages like JS a struct is represented as an
 * object. The details of that representation are described together
 * with the proto support for the language.
 * The JSON representation for `Struct` is JSON object.
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
     * @param array|\Google\Protobuf\Internal\MapField $var
     */
    public function setFields($var): static {}
}
