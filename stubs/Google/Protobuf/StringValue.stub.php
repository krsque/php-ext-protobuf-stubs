<?php

namespace Google\Protobuf;

/**
 * Wrapper message for `string`.
 * The JSON representation for `StringValue` is JSON string.
 *
 * Generated from protobuf message <code>google.protobuf.StringValue</code>
 */
final class StringValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           The string value.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The string value.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     */
    public function getValue(): string {}

    /**
     * The string value.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     */
    public function setValue(string $var): static {}
}
