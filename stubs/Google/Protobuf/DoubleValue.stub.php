<?php

namespace Google\Protobuf;

/**
 * Wrapper message for `double`.
 * The JSON representation for `DoubleValue` is JSON number.
 * Not recommended for use in new APIs, but still useful for legacy APIs and
 * has no plan to be removed.
 *
 * Generated from protobuf message <code>google.protobuf.DoubleValue</code>
 */
final class DoubleValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $value
     *           The double value.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The double value.
     *
     * Generated from protobuf field <code>double value = 1;</code>
     */
    public function getValue(): float {}

    /**
     * The double value.
     *
     * Generated from protobuf field <code>double value = 1;</code>
     */
    public function setValue(float $var): static {}
}
