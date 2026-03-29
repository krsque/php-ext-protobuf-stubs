<?php

namespace Google\Protobuf;

final class DescriptorPool
{
    public static function getGeneratedPool(): DescriptorPool {}

    /**
     * @param string $className A fully qualified protobuf class name
     */
    public function getDescriptorByClassName(string $className): Descriptor {}

    /**
     * @param string $name Fully qualified proto name (e.g., "google.protobuf.Timestamp").
     */
    public function getDescriptorByProtoName(string $name): \Google\Protobuf\Descriptor {}

    /**
     * @param string $className A fully qualified protobuf class name
     */
    public function getEnumDescriptorByClassName(string $className): EnumDescriptor {}

    /**
     * @param string $data Serialized FileDescriptorProto.
     * @internal
     */
    public function internalAddGeneratedFile(string $data, int $data_len): void {}
}
