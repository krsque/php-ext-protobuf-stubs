<?php

namespace Google\Protobuf;

/**
 * The syntax in which a protocol buffer element is defined.
 *
 * Protobuf type <code>google.protobuf.Syntax</code>
 */
class Syntax
{
    /**
     * Syntax `proto2`.
     *
     * Generated from protobuf enum <code>SYNTAX_PROTO2 = 0;</code>
     */
    public const SYNTAX_PROTO2 = 0;

    /**
     * Syntax `proto3`.
     *
     * Generated from protobuf enum <code>SYNTAX_PROTO3 = 1;</code>
     */
    public const SYNTAX_PROTO3 = 1;

    /**
     * Syntax `editions`.
     *
     * Generated from protobuf enum <code>SYNTAX_EDITIONS = 2;</code>
     */
    public const SYNTAX_EDITIONS = 2;

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
