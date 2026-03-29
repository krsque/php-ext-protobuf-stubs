<?php

namespace Google\Protobuf;

/**
 * Wrapper message for `bytes`.
 * The JSON representation for `BytesValue` is JSON string.
 *
 * Generated from protobuf message <code>google.protobuf.BytesValue</code>
 */
final class BytesValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           The bytes value.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The bytes value.
     *
     * Generated from protobuf field <code>bytes value = 1;</code>
     */
    public function getValue(): string {}

    /**
     * The bytes value.
     *
     * Generated from protobuf field <code>bytes value = 1;</code>
     */
    public function setValue(string $var): static {}
}
