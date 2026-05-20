<?php

namespace Google\Protobuf;

/**
 * Represents a JSON `null`.
 * `NullValue` is a sentinel, using an enum with only one value to represent
 * the null value for the `Value` type union.
 * A field of type `NullValue` with any value other than `0` is considered
 * invalid. Most ProtoJSON serializers will emit a Value with a `null_value` set
 * as a JSON `null` regardless of the integer value, and so will round trip to
 * a `0` value.
 *
 * Protobuf type <code>google.protobuf.NullValue</code>
 */
class NullValue
{
    /**
     * Null value.
     *
     * Generated from protobuf enum <code>NULL_VALUE = 0;</code>
     */
    public const NULL_VALUE = 0;

    /**
     * @param int $value Enum value.
     * @return string|null Enum name, or null if value is unknown.
     */
    public static function name(int $value) {}

    /**
     * @param string $name Enum name.
     * @return int|null Enum value, or null if name is unknown.
     */
    public static function value(string $name) {}
}
