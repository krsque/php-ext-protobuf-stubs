<?php

namespace Google\Protobuf\Internal;

class GPBUtil
{
    public const NANOS_PER_MILLISECOND = 1000000;

    public const NANOS_PER_MICROSECOND = 1000;

    public const TYPE_URL_PREFIX = 'type.googleapis.com/';

    /**
     * @internal
     */
    public static function checkInt32(mixed &$var): void {}

    /**
     * @internal
     */
    public static function checkUint32(mixed &$var): void {}

    /**
     * @internal
     */
    public static function checkInt64(mixed &$var): void {}

    /**
     * @internal
     */
    public static function checkUint64(mixed &$var): void {}

    /**
     * @param string $class Enum class name.
     * @internal
     */
    public static function checkEnum(mixed $value, string $class): void {}

    /**
     * @internal
     */
    public static function checkFloat(mixed &$var): void {}

    /**
     * @internal
     */
    public static function checkDouble(mixed &$var): void {}

    /**
     * @internal
     */
    public static function checkBool(mixed &$var): void {}

    /**
     * @internal
     */
    public static function checkString(mixed &$var, bool $check_utf8): void {}

    /**
     * @internal
     */
    public static function checkBytes($value): void {}

    /**
     * @param string $class Message class name.
     * @internal
     */
    public static function checkMessage(mixed $value, string $class): void {}

    /**
     * @param int $key_type GPBType constant for map key.
     * @param int $value_type GPBType constant for map value.
     * @param class-string|null $klass Message class name (message/enum values only).
     * @internal
     */
    public static function checkMapField(mixed &$var, int $key_type, int $value_type, ?string $klass = null): void {}

    /**
     * @param int $type GPBType constant.
     * @param class-string|null $klass Message class name (message/enum fields only).
     * @internal
     */
    public static function checkRepeatedField(mixed &$var, int $type, ?string $klass = null): void {}
}
