<?php

namespace Google\Protobuf\Field;

/**
 * Basic field types.
 *
 * Protobuf type <code>google.protobuf.Field.Kind</code>
 */
class Kind
{
    /**
     * Field type unknown.
     *
     * Generated from protobuf enum <code>TYPE_UNKNOWN = 0;</code>
     */
    public const TYPE_UNKNOWN = 0;

    /**
     * Field type double.
     *
     * Generated from protobuf enum <code>TYPE_DOUBLE = 1;</code>
     */
    public const TYPE_DOUBLE = 1;

    /**
     * Field type float.
     *
     * Generated from protobuf enum <code>TYPE_FLOAT = 2;</code>
     */
    public const TYPE_FLOAT = 2;

    /**
     * Field type int64.
     *
     * Generated from protobuf enum <code>TYPE_INT64 = 3;</code>
     */
    public const TYPE_INT64 = 3;

    /**
     * Field type uint64.
     *
     * Generated from protobuf enum <code>TYPE_UINT64 = 4;</code>
     */
    public const TYPE_UINT64 = 4;

    /**
     * Field type int32.
     *
     * Generated from protobuf enum <code>TYPE_INT32 = 5;</code>
     */
    public const TYPE_INT32 = 5;

    /**
     * Field type fixed64.
     *
     * Generated from protobuf enum <code>TYPE_FIXED64 = 6;</code>
     */
    public const TYPE_FIXED64 = 6;

    /**
     * Field type fixed32.
     *
     * Generated from protobuf enum <code>TYPE_FIXED32 = 7;</code>
     */
    public const TYPE_FIXED32 = 7;

    /**
     * Field type bool.
     *
     * Generated from protobuf enum <code>TYPE_BOOL = 8;</code>
     */
    public const TYPE_BOOL = 8;

    /**
     * Field type string.
     *
     * Generated from protobuf enum <code>TYPE_STRING = 9;</code>
     */
    public const TYPE_STRING = 9;

    /**
     * Field type group. Proto2 syntax only, and deprecated.
     *
     * Generated from protobuf enum <code>TYPE_GROUP = 10;</code>
     */
    public const TYPE_GROUP = 10;

    /**
     * Field type message.
     *
     * Generated from protobuf enum <code>TYPE_MESSAGE = 11;</code>
     */
    public const TYPE_MESSAGE = 11;

    /**
     * Field type bytes.
     *
     * Generated from protobuf enum <code>TYPE_BYTES = 12;</code>
     */
    public const TYPE_BYTES = 12;

    /**
     * Field type uint32.
     *
     * Generated from protobuf enum <code>TYPE_UINT32 = 13;</code>
     */
    public const TYPE_UINT32 = 13;

    /**
     * Field type enum.
     *
     * Generated from protobuf enum <code>TYPE_ENUM = 14;</code>
     */
    public const TYPE_ENUM = 14;

    /**
     * Field type sfixed32.
     *
     * Generated from protobuf enum <code>TYPE_SFIXED32 = 15;</code>
     */
    public const TYPE_SFIXED32 = 15;

    /**
     * Field type sfixed64.
     *
     * Generated from protobuf enum <code>TYPE_SFIXED64 = 16;</code>
     */
    public const TYPE_SFIXED64 = 16;

    /**
     * Field type sint32.
     *
     * Generated from protobuf enum <code>TYPE_SINT32 = 17;</code>
     */
    public const TYPE_SINT32 = 17;

    /**
     * Field type sint64.
     *
     * Generated from protobuf enum <code>TYPE_SINT64 = 18;</code>
     */
    public const TYPE_SINT64 = 18;

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
