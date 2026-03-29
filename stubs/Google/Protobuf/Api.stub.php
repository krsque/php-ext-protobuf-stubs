<?php

namespace Google\Protobuf;

/**
 * Api is a light-weight descriptor for an API Interface.
 * Interfaces are also described as "protocol buffer services" in some contexts,
 * such as by the "service" keyword in a .proto file, but they are different
 * from API Services, which represent a concrete implementation of an interface
 * as opposed to simply a description of methods and bindings. They are also
 * sometimes simply referred to as "APIs" in other contexts, such as the name of
 * this message itself. See https://cloud.google.com/apis/design/glossary for
 * detailed terminology.
 * New usages of this message as an alternative to ServiceDescriptorProto are
 * strongly discouraged. This message does not reliability preserve all
 * information necessary to model the schema and preserve semantics. Instead
 * make use of FileDescriptorSet which preserves the necessary information.
 *
 * Generated from protobuf message <code>google.protobuf.Api</code>
 */
final class Api extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The fully qualified name of this interface, including package name
     *           followed by the interface's simple name.
     *     @type \Google\Protobuf\Method[] $methods
     *           The methods of this interface, in unspecified order.
     *     @type \Google\Protobuf\Option[] $options
     *           Any metadata attached to the interface.
     *     @type string $version
     *           A version string for this interface. If specified, must have the form
     *           `major-version.minor-version`, as in `1.10`. If the minor version is
     *           omitted, it defaults to zero. If the entire version field is empty, the
     *           major version is derived from the package name, as outlined below. If the
     *           field is not empty, the version in the package name will be verified to be
     *           consistent with what is provided here.
     *           The versioning schema uses [semantic
     *           versioning](http://semver.org) where the major version number
     *           indicates a breaking change and the minor version an additive,
     *           non-breaking change. Both version numbers are signals to users
     *           what to expect from different versions, and should be carefully
     *           chosen based on the product plan.
     *           The major version is also reflected in the package name of the
     *           interface, which must end in `v<major-version>`, as in
     *           `google.feature.v1`. For major versions 0 and 1, the suffix can
     *           be omitted. Zero major versions must only be used for
     *           experimental, non-GA interfaces.
     *     @type \Google\Protobuf\SourceContext $source_context
     *           Source context for the protocol buffer service represented by this
     *           message.
     *     @type \Google\Protobuf\Mixin[] $mixins
     *           Included interfaces. See [Mixin][].
     *     @type int $syntax
     *           The source syntax of the service.
     *     @type string $edition
     *           The source edition string, only valid when syntax is SYNTAX_EDITIONS.
     * }
     */
    public function __construct(?array $data = null) {}

    /**
     * The fully qualified name of this interface, including package name
     * followed by the interface's simple name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function getName(): string {}

    /**
     * The fully qualified name of this interface, including package name
     * followed by the interface's simple name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    public function setName(string $var): static {}

    /**
     * The methods of this interface, in unspecified order.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Method methods = 2;</code>
     * @return RepeatedField<\Google\Protobuf\Method>
     */
    public function getMethods(): RepeatedField {}

    /**
     * The methods of this interface, in unspecified order.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Method methods = 2;</code>
     * @param list<\Google\Protobuf\Method>|\Google\Protobuf\RepeatedField $var
     */
    public function setMethods(array|RepeatedField $var): static {}

    /**
     * Any metadata attached to the interface.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 3;</code>
     * @return RepeatedField<\Google\Protobuf\Option>
     */
    public function getOptions(): RepeatedField {}

    /**
     * Any metadata attached to the interface.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 3;</code>
     * @param list<\Google\Protobuf\Option>|\Google\Protobuf\RepeatedField $var
     */
    public function setOptions(array|RepeatedField $var): static {}

    /**
     * A version string for this interface. If specified, must have the form
     * `major-version.minor-version`, as in `1.10`. If the minor version is
     * omitted, it defaults to zero. If the entire version field is empty, the
     * major version is derived from the package name, as outlined below. If the
     * field is not empty, the version in the package name will be verified to be
     * consistent with what is provided here.
     * The versioning schema uses [semantic
     * versioning](http://semver.org) where the major version number
     * indicates a breaking change and the minor version an additive,
     * non-breaking change. Both version numbers are signals to users
     * what to expect from different versions, and should be carefully
     * chosen based on the product plan.
     * The major version is also reflected in the package name of the
     * interface, which must end in `v<major-version>`, as in
     * `google.feature.v1`. For major versions 0 and 1, the suffix can
     * be omitted. Zero major versions must only be used for
     * experimental, non-GA interfaces.
     *
     * Generated from protobuf field <code>string version = 4;</code>
     */
    public function getVersion(): string {}

    /**
     * A version string for this interface. If specified, must have the form
     * `major-version.minor-version`, as in `1.10`. If the minor version is
     * omitted, it defaults to zero. If the entire version field is empty, the
     * major version is derived from the package name, as outlined below. If the
     * field is not empty, the version in the package name will be verified to be
     * consistent with what is provided here.
     * The versioning schema uses [semantic
     * versioning](http://semver.org) where the major version number
     * indicates a breaking change and the minor version an additive,
     * non-breaking change. Both version numbers are signals to users
     * what to expect from different versions, and should be carefully
     * chosen based on the product plan.
     * The major version is also reflected in the package name of the
     * interface, which must end in `v<major-version>`, as in
     * `google.feature.v1`. For major versions 0 and 1, the suffix can
     * be omitted. Zero major versions must only be used for
     * experimental, non-GA interfaces.
     *
     * Generated from protobuf field <code>string version = 4;</code>
     */
    public function setVersion(string $var): static {}

    /**
     * Source context for the protocol buffer service represented by this
     * message.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 5;</code>
     * @return \Google\Protobuf\SourceContext|null
     */
    public function getSourceContext() {}

    /**
     * Source context for the protocol buffer service represented by this
     * message.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 5;</code>
     */
    public function setSourceContext(?\Google\Protobuf\SourceContext $var): static {}

    public function hasSourceContext(): bool {}

    /**
     * Included interfaces. See [Mixin][].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Mixin mixins = 6;</code>
     * @return RepeatedField<\Google\Protobuf\Mixin>
     */
    public function getMixins(): RepeatedField {}

    /**
     * Included interfaces. See [Mixin][].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Mixin mixins = 6;</code>
     * @param list<\Google\Protobuf\Mixin>|\Google\Protobuf\RepeatedField $var
     */
    public function setMixins(array|RepeatedField $var): static {}

    /**
     * The source syntax of the service.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 7;</code>
     * @return int one of the values in {@see \Google\Protobuf\Syntax}
     */
    public function getSyntax(): int {}

    /**
     * The source syntax of the service.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 7;</code>
     * @param int $var one of the values in {@see \Google\Protobuf\Syntax}
     */
    public function setSyntax(int $var): static {}

    /**
     * The source edition string, only valid when syntax is SYNTAX_EDITIONS.
     *
     * Generated from protobuf field <code>string edition = 8;</code>
     */
    public function getEdition(): string {}

    /**
     * The source edition string, only valid when syntax is SYNTAX_EDITIONS.
     *
     * Generated from protobuf field <code>string edition = 8;</code>
     */
    public function setEdition(string $var): static {}
}
