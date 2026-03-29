<?php

namespace Google\Protobuf;

/**
 * Wrapper message for `uint32`.
 * The JSON representation for `UInt32Value` is JSON number.
 *
 * Generated from protobuf message <code>google.protobuf.UInt32Value</code>
 */
final class UInt32Value extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $value
     *           The uint32 value.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The uint32 value.
     *
     * Generated from protobuf field <code>uint32 value = 1;</code>
     */
    public function getValue(): int {}

    /**
     * The uint32 value.
     *
     * Generated from protobuf field <code>uint32 value = 1;</code>
     */
    public function setValue(int $var): static {}
}
