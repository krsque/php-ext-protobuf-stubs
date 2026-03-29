# 30.1.0

Stubs for `ext-protobuf` v4.30.1.

Stub files: 45 | C ext classes: 56 | PHP lib classes: 116

No stub changes from 30.0.0.

## Divergences (C ext vs PHP lib)

- Google\Protobuf\Internal\GPBUtil::checkEnum() — param count: C=2, PHP=1 (using C)
- Google\Protobuf\Internal\GPBUtil::checkMessage() — param count: C=2, PHP=3 (using C)
- Google\Protobuf\Internal\Message::__construct() — visibility: C=protected, PHP=public (using C)
- Google\Protobuf\Any — extends: C=Google\Protobuf\Internal\Message, PHP=Google\Protobuf\Internal\AnyBase (using C)
- Google\Protobuf\Timestamp — extends: C=Google\Protobuf\Internal\Message, PHP=Google\Protobuf\Internal\TimestampBase (using C)

## PHP-only classes (not in C ext)

These classes exist in the `google/protobuf` PHP library but not in the C extension. No stubs are generated for them.

- `Google\Protobuf\Field_Cardinality`
- `Google\Protobuf\Field_Kind`
- `Google\Protobuf\Internal\AnyBase`
- `Google\Protobuf\Internal\CodedInputStream`
- `Google\Protobuf\Internal\CodedOutputStream`
- `Google\Protobuf\Internal\Descriptor`
- `Google\Protobuf\Internal\DescriptorProto`
- `Google\Protobuf\Internal\DescriptorProto\ExtensionRange`
- `Google\Protobuf\Internal\DescriptorProto\ReservedRange`
- `Google\Protobuf\Internal\Edition`
- `Google\Protobuf\Internal\EnumBuilderContext`
- `Google\Protobuf\Internal\EnumDescriptor`
- `Google\Protobuf\Internal\EnumDescriptorProto`
- `Google\Protobuf\Internal\EnumDescriptorProto\EnumReservedRange`
- `Google\Protobuf\Internal\EnumOptions`
- `Google\Protobuf\Internal\EnumValueDescriptorProto`
- `Google\Protobuf\Internal\EnumValueOptions`
- `Google\Protobuf\Internal\ExtensionRangeOptions`
- `Google\Protobuf\Internal\ExtensionRangeOptions\Declaration`
- `Google\Protobuf\Internal\ExtensionRangeOptions\VerificationState`
- `Google\Protobuf\Internal\FeatureSet`
- `Google\Protobuf\Internal\FeatureSetDefaults`
- `Google\Protobuf\Internal\FeatureSetDefaults\FeatureSetEditionDefault`
- `Google\Protobuf\Internal\FeatureSet\EnforceNamingStyle`
- `Google\Protobuf\Internal\FeatureSet\EnumType`
- `Google\Protobuf\Internal\FeatureSet\FieldPresence`
- `Google\Protobuf\Internal\FeatureSet\JsonFormat`
- `Google\Protobuf\Internal\FeatureSet\MessageEncoding`
- `Google\Protobuf\Internal\FeatureSet\RepeatedFieldEncoding`
- `Google\Protobuf\Internal\FeatureSet\Utf8Validation`
- `Google\Protobuf\Internal\FieldDescriptor`
- `Google\Protobuf\Internal\FieldDescriptorProto`
- `Google\Protobuf\Internal\FieldDescriptorProto\Label`
- `Google\Protobuf\Internal\FieldDescriptorProto\Type`
- `Google\Protobuf\Internal\FieldOptions`
- `Google\Protobuf\Internal\FieldOptions\CType`
- `Google\Protobuf\Internal\FieldOptions\EditionDefault`
- `Google\Protobuf\Internal\FieldOptions\FeatureSupport`
- `Google\Protobuf\Internal\FieldOptions\JSType`
- `Google\Protobuf\Internal\FieldOptions\OptionRetention`
- `Google\Protobuf\Internal\FieldOptions\OptionTargetType`
- `Google\Protobuf\Internal\FileDescriptor`
- `Google\Protobuf\Internal\FileDescriptorProto`
- `Google\Protobuf\Internal\FileDescriptorSet`
- `Google\Protobuf\Internal\FileOptions`
- `Google\Protobuf\Internal\FileOptions\OptimizeMode`
- `Google\Protobuf\Internal\GPBDecodeException`
- `Google\Protobuf\Internal\GPBJsonWire`
- `Google\Protobuf\Internal\GPBLabel`
- `Google\Protobuf\Internal\GPBWire`
- `Google\Protobuf\Internal\GPBWireType`
- `Google\Protobuf\Internal\GeneratedCodeInfo`
- `Google\Protobuf\Internal\GeneratedCodeInfo\Annotation`
- `Google\Protobuf\Internal\GeneratedCodeInfo\Annotation\Semantic`
- `Google\Protobuf\Internal\MapEntry`
- `Google\Protobuf\Internal\MessageBuilderContext`
- `Google\Protobuf\Internal\MessageOptions`
- `Google\Protobuf\Internal\MethodDescriptorProto`
- `Google\Protobuf\Internal\MethodOptions`
- `Google\Protobuf\Internal\MethodOptions\IdempotencyLevel`
- `Google\Protobuf\Internal\OneofDescriptor`
- `Google\Protobuf\Internal\OneofDescriptorProto`
- `Google\Protobuf\Internal\OneofField`
- `Google\Protobuf\Internal\OneofOptions`
- `Google\Protobuf\Internal\RawInputStream`
- `Google\Protobuf\Internal\ServiceDescriptorProto`
- `Google\Protobuf\Internal\ServiceOptions`
- `Google\Protobuf\Internal\SourceCodeInfo`
- `Google\Protobuf\Internal\SourceCodeInfo\Location`
- `Google\Protobuf\Internal\TimestampBase`
- `Google\Protobuf\Internal\UninterpretedOption`
- `Google\Protobuf\Internal\UninterpretedOption\NamePart`
