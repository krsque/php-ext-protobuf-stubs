<?php

namespace Google\Protobuf;

/**
 * Wrapper message for `int32`.
 * The JSON representation for `Int32Value` is JSON number.
 * Not recommended for use in new APIs, but still useful for legacy APIs and
 * has no plan to be removed.
 *
 * Generated from protobuf message <code>google.protobuf.Int32Value</code>
 */
final class Int32Value extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $value
     *           The int32 value.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The int32 value.
     *
     * Generated from protobuf field <code>int32 value = 1;</code>
     */
    public function getValue(): int {}

    /**
     * The int32 value.
     *
     * Generated from protobuf field <code>int32 value = 1;</code>
     */
    public function setValue(int $var): static {}
}
