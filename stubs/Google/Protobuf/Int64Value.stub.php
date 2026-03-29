<?php

namespace Google\Protobuf;

/**
 * Wrapper message for `int64`.
 * The JSON representation for `Int64Value` is JSON string.
 *
 * Generated from protobuf message <code>google.protobuf.Int64Value</code>
 */
final class Int64Value extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $value
     *           The int64 value.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The int64 value.
     *
     * Generated from protobuf field <code>int64 value = 1;</code>
     * @return int|string
     */
    public function getValue() {}

    /**
     * The int64 value.
     *
     * Generated from protobuf field <code>int64 value = 1;</code>
     * @param int|string $var
     */
    public function setValue($var): static {}
}
