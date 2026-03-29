<?php

namespace Google\Protobuf;

/**
 * Wrapper message for `uint64`.
 * The JSON representation for `UInt64Value` is JSON string.
 * Not recommended for use in new APIs, but still useful for legacy APIs and
 * has no plan to be removed.
 *
 * Generated from protobuf message <code>google.protobuf.UInt64Value</code>
 */
final class UInt64Value extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $value
     *           The uint64 value.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The uint64 value.
     *
     * Generated from protobuf field <code>uint64 value = 1;</code>
     * @return int|string
     */
    public function getValue() {}

    /**
     * The uint64 value.
     *
     * Generated from protobuf field <code>uint64 value = 1;</code>
     */
    public function setValue(int|string $var): static {}
}
