<?php

namespace Google\Protobuf;

final class DescriptorPool
{
    public static function getGeneratedPool(): DescriptorPool {}

    /**
     * @param string $name A fully qualified protobuf class name
     */
    public function getDescriptorByClassName(string $name): ?Descriptor {}

    /**
     * @param string $name Fully qualified proto name (e.g., "google.protobuf.Timestamp").
     * @return \Google\Protobuf\Descriptor|null Null when no message with that name is registered.
     */
    public function getDescriptorByProtoName(string $name): ?\Google\Protobuf\Descriptor {}

    /**
     * @param string $name A fully qualified protobuf class name
     */
    public function getEnumDescriptorByClassName(string $name): ?EnumDescriptor {}

    /**
     * @param string $data Serialized FileDescriptorProto.
     * @param bool $data_len Whether nested submessages are used. Misnamed upstream.
     * @internal
     */
    public function internalAddGeneratedFile(string $data, bool $data_len = false): void {}
}
