<?php

namespace Google\Protobuf\Internal;

/**
 * @template TKey of array-key
 * @template TValue
 * @implements \ArrayAccess<TKey, TValue>
 * @implements \IteratorAggregate<TKey, TValue>
 */
final class MapField implements \ArrayAccess, \IteratorAggregate, \Countable
{
    /**
     * Constructs an instance of MapField.
     *
     * @param int $key_type Type of the stored key element.
     * @param int $value_type Type of the stored value element.
     * @param class-string<TValue>|null $klass Message/Enum class name (message/enum fields only).
     */
    public function __construct(int $key_type, int $value_type, ?string $klass = null) {}

    /**
     * Check the existence of the element at the given key.
     *
     * This will also be called for: isset($arr)
     *
     * @param int|string $key The key of the element to be removed.
     * @return bool True if the element at the given key exists.
     * @throws \ErrorException Invalid type for key.
     */
    public function offsetExists($key): bool {}

    /**
     * Return the element at the given key.
     *
     * This will also be called for: $ele = $arr[$key]
     *
     * @param TKey $key The key of the element to be fetched.
     * @return TValue The stored element at given key.
     * @throws \ErrorException Invalid type for index.
     * @throws \ErrorException Non-existing index.
     */
    public function offsetGet($key): mixed {}

    /**
     * Assign the element at the given key.
     *
     * This will also be called for: $arr[$key] = $value
     *
     * @param TKey $key The key of the element to be fetched.
     * @param TValue $value The element to be assigned.
     * @throws \ErrorException Invalid type for key.
     * @throws \ErrorException Invalid type for value.
     * @throws \ErrorException Non-existing key.
     */
    public function offsetSet($key, $value): void {}

    /**
     * Remove the element at the given key.
     *
     * This will also be called for: unset($arr)
     *
     * @param int|string $key The key of the element to be removed.
     * @throws \ErrorException Invalid type for key.
     */
    public function offsetUnset($key): void {}

    /**
     * Return the number of stored elements.
     *
     * This will also be called for: count($arr)
     *
     * @return int The number of stored elements.
     */
    public function count(): int {}

    /**
     * @return \Google\Protobuf\Internal\MapFieldIter<TKey, TValue>
     */
    public function getIterator(): \Traversable {}
}
