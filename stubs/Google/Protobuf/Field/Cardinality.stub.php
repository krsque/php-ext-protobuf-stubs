<?php

namespace Google\Protobuf\Field;

/**
 * Whether a field is optional, required, or repeated.
 *
 * Protobuf type <code>google.protobuf.Field.Cardinality</code>
 */
class Cardinality
{
    /**
     * For fields with unknown cardinality.
     *
     * Generated from protobuf enum <code>CARDINALITY_UNKNOWN = 0;</code>
     */
    public const CARDINALITY_UNKNOWN = 0;

    /**
     * For optional fields.
     *
     * Generated from protobuf enum <code>CARDINALITY_OPTIONAL = 1;</code>
     */
    public const CARDINALITY_OPTIONAL = 1;

    /**
     * For required fields. Proto2 syntax only.
     *
     * Generated from protobuf enum <code>CARDINALITY_REQUIRED = 2;</code>
     */
    public const CARDINALITY_REQUIRED = 2;

    /**
     * For repeated fields.
     *
     * Generated from protobuf enum <code>CARDINALITY_REPEATED = 3;</code>
     */
    public const CARDINALITY_REPEATED = 3;

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
