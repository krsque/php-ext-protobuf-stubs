# 33.6.2

Stubs for `ext-protobuf` v4.33.6.

Stub files: 47 | C ext classes: 57 | PHP lib classes: 121

## Release notes

- Aliased class names such as `Google\Protobuf\Internal\RepeatedField` are now declared as subclasses of the class they alias, so PHPStan accepts a value of the aliased name where the canonical name is expected — this removes `argument.type` errors in code that mixes protoc-generated signatures with hand-written ones. The alias target is no longer final in `stubs/` (it stays final in the Psalm aggregate), which is required for PHPStan to keep the inheritance. Psalm is unaffected and resolves both directions via `class_alias()`.

## Changes from 33.6.1

**Method/constant changes:**
- Removed `Google\Protobuf\Internal\RepeatedField::__construct()`
- Removed `Google\Protobuf\Internal\RepeatedField::append()`
- Removed `Google\Protobuf\Internal\RepeatedField::offsetExists()`
- Removed `Google\Protobuf\Internal\RepeatedField::offsetGet()`
- Removed `Google\Protobuf\Internal\RepeatedField::offsetSet()`
- Removed `Google\Protobuf\Internal\RepeatedField::offsetUnset()`
- Removed `Google\Protobuf\Internal\RepeatedField::count()`
- Removed `Google\Protobuf\Internal\RepeatedField::getIterator()`

**Other changes (PHPDoc, formatting):**
- `Google\Protobuf\RepeatedField`

## Divergences (C ext vs PHP lib)

- Google\Protobuf\Internal\GPBUtil::checkEnum() — param count: C=2, PHP=1 (using C)
- Google\Protobuf\Internal\GPBUtil::checkMessage() — param count: C=2, PHP=3 (using C)
- Google\Protobuf\DescriptorPool::getDescriptorByClassName() — nullability: def.c returns null, declared Descriptor (using C, widened to ?Descriptor)
- Google\Protobuf\DescriptorPool::getEnumDescriptorByClassName() — nullability: def.c returns null, declared EnumDescriptor (using C, widened to ?EnumDescriptor)
- Google\Protobuf\Internal\Message::__construct() — visibility: C=protected, PHP=public (using C)
- Google\Protobuf\Any — extends: C=Google\Protobuf\Internal\Message, PHP=Google\Protobuf\Internal\AnyBase (using C)
- Google\Protobuf\Timestamp — extends: C=Google\Protobuf\Internal\Message, PHP=Google\Protobuf\Internal\TimestampBase (using C)
- Google\Protobuf\RepeatedField — final: C=true, stubs/=false (deliberate: Google\Protobuf\Internal\RepeatedField is declared as a subclass of it, which is how PHPStan assigns across the alias with no extension loaded; the Psalm aggregate keeps final)

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
- `Google\Protobuf\Internal\FeatureSet\VisibilityFeature`
- `Google\Protobuf\Internal\FeatureSet\VisibilityFeature\DefaultSymbolVisibility`
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
- `Google\Protobuf\Internal\SymbolVisibility`
- `Google\Protobuf\Internal\TimestampBase`
- `Google\Protobuf\Internal\UninterpretedOption`
- `Google\Protobuf\Internal\UninterpretedOption\NamePart`
