<?php

namespace Google\Protobuf;

/**
 * Method represents a method of an API interface.
 *
 * Generated from protobuf message <code>google.protobuf.Method</code>
 */
final class Method extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The simple name of this method.
     *     @type string $request_type_url
     *           A URL of the input message type.
     *     @type bool $request_streaming
     *           If true, the request is streamed.
     *     @type string $response_type_url
     *           The URL of the output message type.
     *     @type bool $response_streaming
     *           If true, the response is streamed.
     *     @type array<\Google\Protobuf\Option>|\Google\Protobuf\Internal\RepeatedField $options
     *           Any metadata attached to the method.
     *     @type int $syntax
     *           The source syntax of this method.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The simple name of this method.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function getName(): string {}

    /**
     * The simple name of this method.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function setName(string $var): static {}

    /**
     * A URL of the input message type.
     *
     * Generated from protobuf field <code>string request_type_url = 2;</code>
     */
    public function getRequestTypeUrl(): string {}

    /**
     * A URL of the input message type.
     *
     * Generated from protobuf field <code>string request_type_url = 2;</code>
     */
    public function setRequestTypeUrl(string $var): static {}

    /**
     * If true, the request is streamed.
     *
     * Generated from protobuf field <code>bool request_streaming = 3;</code>
     */
    public function getRequestStreaming(): bool {}

    /**
     * If true, the request is streamed.
     *
     * Generated from protobuf field <code>bool request_streaming = 3;</code>
     */
    public function setRequestStreaming(bool $var): static {}

    /**
     * The URL of the output message type.
     *
     * Generated from protobuf field <code>string response_type_url = 4;</code>
     */
    public function getResponseTypeUrl(): string {}

    /**
     * The URL of the output message type.
     *
     * Generated from protobuf field <code>string response_type_url = 4;</code>
     */
    public function setResponseTypeUrl(string $var): static {}

    /**
     * If true, the response is streamed.
     *
     * Generated from protobuf field <code>bool response_streaming = 5;</code>
     */
    public function getResponseStreaming(): bool {}

    /**
     * If true, the response is streamed.
     *
     * Generated from protobuf field <code>bool response_streaming = 5;</code>
     */
    public function setResponseStreaming(bool $var): static {}

    /**
     * Any metadata attached to the method.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 6;</code>
     */
    public function getOptions(): \Google\Protobuf\Internal\RepeatedField {}

    /**
     * Any metadata attached to the method.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 6;</code>
     * @param array<\Google\Protobuf\Option>|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setOptions($var): static {}

    /**
     * The source syntax of this method.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 7;</code>
     */
    public function getSyntax(): int {}

    /**
     * The source syntax of this method.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 7;</code>
     */
    public function setSyntax(int $var): static {}
}
