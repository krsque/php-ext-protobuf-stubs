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
    public static function checkInt32(mixed $value): void {}

    /**
     * @internal
     */
    public static function checkUint32(mixed $value): void {}

    /**
     * @internal
     */
    public static function checkInt64(mixed $value): void {}

    /**
     * @internal
     */
    public static function checkUint64(mixed $value): void {}

    /**
     * @param string $class Enum class name.
     * @internal
     */
    public static function checkEnum(mixed $value, string $class): void {}

    /**
     * @internal
     */
    public static function checkFloat(mixed $value): void {}

    /**
     * @internal
     */
    public static function checkDouble(mixed $value): void {}

    /**
     * @internal
     */
    public static function checkBool(mixed $value): void {}

    /**
     * @internal
     */
    public static function checkString(mixed $value, bool $check_utf8): void {}

    /**
     * @internal
     */
    public static function checkBytes(mixed $value): void {}

    /**
     * @param string $class Message class name.
     * @internal
     */
    public static function checkMessage(mixed $value, string $class): void {}

    /**
     * @param int $key_type GPBType constant for map key.
     * @param int $value_type GPBType constant for map value.
     * @param class-string|null $value_class Message class name (message/enum values only).
     * @internal
     */
    public static function checkMapField(mixed $value, int $key_type, int $value_type, ?string $value_class = null): void {}

    /**
     * @param int $type GPBType constant.
     * @param class-string|null $class Message class name (message/enum fields only).
     * @internal
     */
    public static function checkRepeatedField(mixed $value, int $type, ?string $class = null): void {}
}
