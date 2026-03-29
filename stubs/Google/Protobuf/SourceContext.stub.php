<?php

namespace Google\Protobuf;

/**
 * `SourceContext` represents information about the source of a
 * protobuf element, like the file in which it is defined.
 *
 * Generated from protobuf message <code>google.protobuf.SourceContext</code>
 */
final class SourceContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $file_name
     *           The path-qualified name of the .proto file that contained the associated
     *           protobuf element.  For example: `"google/protobuf/source_context.proto"`.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The path-qualified name of the .proto file that contained the associated
     * protobuf element.  For example: `"google/protobuf/source_context.proto"`.
     *
     * Generated from protobuf field <code>string file_name = 1;</code>
     */
    public function getFileName(): string {}

    /**
     * The path-qualified name of the .proto file that contained the associated
     * protobuf element.  For example: `"google/protobuf/source_context.proto"`.
     *
     * Generated from protobuf field <code>string file_name = 1;</code>
     */
    public function setFileName(string $var): static {}
}
