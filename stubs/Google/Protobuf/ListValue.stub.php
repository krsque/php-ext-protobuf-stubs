<?php

namespace Google\Protobuf;

/**
 * `ListValue` is a wrapper around a repeated field of values.
 * The JSON representation for `ListValue` is JSON array.
 *
 * Generated from protobuf message <code>google.protobuf.ListValue</code>
 */
final class ListValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Value[] $values
     *           Repeated field of dynamically typed values.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * Repeated field of dynamically typed values.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value values = 1;</code>
     * @return RepeatedField<\Google\Protobuf\Value>
     */
    public function getValues(): RepeatedField {}

    /**
     * Repeated field of dynamically typed values.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value values = 1;</code>
     * @param list<\Google\Protobuf\Value>|\Google\Protobuf\RepeatedField $var
     */
    public function setValues($var): static {}
}
