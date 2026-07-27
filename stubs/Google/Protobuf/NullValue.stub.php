<?php

namespace Google\Protobuf;

/**
 * `NullValue` is a singleton enumeration to represent the null value for the
 * `Value` type union.
 *  The JSON representation for `NullValue` is JSON `null`.
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
     * @param int $key Enum value.
     * @return string|null Enum name, or null if value is unknown.
     */
    public static function name(int $key): ?string {}

    /**
     * @param string $key Enum name.
     * @return int|null Enum value, or null if name is unknown.
     */
    public static function value(string $key): ?int {}
}
