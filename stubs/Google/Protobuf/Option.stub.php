<?php

namespace Google\Protobuf;

/**
 * A protocol buffer option, which can be attached to a message, field,
 * enumeration, etc.
 * New usages of this message as an alternative to FileOptions, MessageOptions,
 * FieldOptions, EnumOptions, EnumValueOptions, ServiceOptions, or MethodOptions
 * are strongly discouraged.
 *
 * Generated from protobuf message <code>google.protobuf.Option</code>
 */
final class Option extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The option's name. For protobuf built-in options (options defined in
     *           descriptor.proto), this is the short name. For example, `"map_entry"`.
     *           For custom options, it should be the fully-qualified name. For example,
     *           `"google.api.http"`.
     *     @type \Google\Protobuf\Any $value
     *           The option's value packed in an Any message. If the value is a primitive,
     *           the corresponding wrapper type defined in google/protobuf/wrappers.proto
     *           should be used. If the value is an enum, it should be stored as an int32
     *           value using the google.protobuf.Int32Value type.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The option's name. For protobuf built-in options (options defined in
     * descriptor.proto), this is the short name. For example, `"map_entry"`.
     * For custom options, it should be the fully-qualified name. For example,
     * `"google.api.http"`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function getName(): string {}

    /**
     * The option's name. For protobuf built-in options (options defined in
     * descriptor.proto), this is the short name. For example, `"map_entry"`.
     * For custom options, it should be the fully-qualified name. For example,
     * `"google.api.http"`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function setName(string $var): static {}

    /**
     * The option's value packed in an Any message.
     *
     * Generated from protobuf field <code>.google.protobuf.Any value = 2;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getValue() {}

    /**
     * The option's value packed in an Any message. If the value is a primitive,
     * the corresponding wrapper type defined in google/protobuf/wrappers.proto
     * should be used. If the value is an enum, it should be stored as an int32
     * value using the google.protobuf.Int32Value type.
     *
     * Generated from protobuf field <code>.google.protobuf.Any value = 2;</code>
     */
    public function setValue(?\Google\Protobuf\Any $var): static {}

    public function hasValue(): bool {}
}
