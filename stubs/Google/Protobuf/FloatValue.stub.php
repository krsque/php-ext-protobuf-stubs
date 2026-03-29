<?php

namespace Google\Protobuf;

/**
 * Wrapper message for `float`.
 * The JSON representation for `FloatValue` is JSON number.
 * Not recommended for use in new APIs, but still useful for legacy APIs and
 * has no plan to be removed.
 *
 * Generated from protobuf message <code>google.protobuf.FloatValue</code>
 */
final class FloatValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $value
     *           The float value.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The float value.
     *
     * Generated from protobuf field <code>float value = 1;</code>
     */
    public function getValue(): float {}

    /**
     * The float value.
     *
     * Generated from protobuf field <code>float value = 1;</code>
     */
    public function setValue(float $var): static {}
}
