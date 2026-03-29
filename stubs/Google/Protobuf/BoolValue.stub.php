<?php

namespace Google\Protobuf;

/**
 * Wrapper message for `bool`.
 * The JSON representation for `BoolValue` is JSON `true` and `false`.
 * Not recommended for use in new APIs, but still useful for legacy APIs and
 * has no plan to be removed.
 *
 * Generated from protobuf message <code>google.protobuf.BoolValue</code>
 */
final class BoolValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $value
     *           The bool value.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The bool value.
     *
     * Generated from protobuf field <code>bool value = 1;</code>
     */
    public function getValue(): bool {}

    /**
     * The bool value.
     *
     * Generated from protobuf field <code>bool value = 1;</code>
     */
    public function setValue(bool $var): static {}
}
