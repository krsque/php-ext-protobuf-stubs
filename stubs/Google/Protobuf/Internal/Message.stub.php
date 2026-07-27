<?php

namespace Google\Protobuf\Internal;

/**
 * Parent class of all proto messages. Users should not instantiate this class
 * or extend this class or its child classes by their own.  See the comment of
 * specific functions for more details.
 */
class Message
{
    /**
     * Clear all containing fields.
     */
    public function clear(): void {}

    /**
     * Clear all unknown fields previously parsed.
     */
    public function discardUnknownFields(): void {}

    /**
     * Serialize the message to string.
     * @return string Serialized binary protobuf data.
     */
    public function serializeToString(): string {}

    /**
     * Parses a protocol buffer contained in a string.
     *
     * This function takes a string in the (non-human-readable) binary wire
     * format, matching the encoding output by serializeToString().
     * See mergeFrom() for merging behavior, if the field is already set in the
     * specified message.
     *
     * @param string $data Binary protobuf data.
     * @throws \Exception Invalid data.
     */
    public function mergeFromString(string $data): void {}

    /**
     * Serialize the message to json string.
     * @return string Serialized json protobuf data.
     */
    public function serializeToJsonString(mixed $flags = 0): string {}

    /**
     * Parses a json string to protobuf message.
     *
     * This function takes a string in the json wire format, matching the
     * encoding output by serializeToJsonString().
     * See mergeFrom() for merging behavior, if the field is already set in the
     * specified message.
     *
     * @param string $data Json protobuf data.
     * @throws \Exception Invalid data.
     */
    public function mergeFromJsonString(string $data, bool $arg = false): void {}

    /**
     * Merges the contents of the specified message into current message.
     *
     * This method merges the contents of the specified message into the
     * current message. Singular fields that are set in the specified message
     * overwrite the corresponding fields in the current message.  Repeated
     * fields are appended. Map fields key-value pairs are overwritten.
     * Singular/Oneof sub-messages are recursively merged. All overwritten
     * sub-messages are deep-copied.
     *
     * @param object $data Protobuf message to be merged from.
     */
    public function mergeFrom(object $data): void {}

    /**
     * @param string $field Field name.
     */
    protected function readWrapperValue(string $field): mixed {}

    /**
     * @param string $field Field name.
     */
    protected function writeWrapperValue(string $field, mixed $value): void {}

    /**
     * @param int $field Field number.
     */
    protected function hasOneof(int $field): bool {}

    /**
     * @param int $field Field number.
     */
    protected function readOneof(int $field): mixed {}

    /**
     * @param int $field Field number.
     */
    protected function writeOneof(int $field, mixed $value): void {}

    /**
     * @return string The field name in the oneof.
     */
    protected function whichOneof(string $field): string {}

    /**
     * @ignore
     */
    protected function __construct(?array $data = null) {}
}
