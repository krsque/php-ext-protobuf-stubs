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
     * @param class-string<TValue>|null $value_class Message/Enum class name (message/enum fields only).
     */
    public function __construct(int $key_type, int $value_type, ?string $value_class = null) {}

    /**
     * Check the existence of the element at the given key.
     *
     * This will also be called for: isset($arr)
     *
     * @param int|string $index The key of the element to be removed.
     * @return bool True if the element at the given key exists.
     * @throws \ErrorException Invalid type for key.
     */
    public function offsetExists(mixed $index): bool {}

    /**
     * Return the element at the given key.
     *
     * This will also be called for: $ele = $arr[$key]
     *
     * @param TKey $index The key of the element to be fetched.
     * @return TValue The stored element at given key.
     * @throws \ErrorException Invalid type for index.
     * @throws \ErrorException Non-existing index.
     */
    public function offsetGet(mixed $index): mixed {}

    /**
     * Assign the element at the given key.
     *
     * This will also be called for: $arr[$key] = $value
     *
     * @param TKey $index The key of the element to be fetched.
     * @param TValue $newval The element to be assigned.
     * @throws \ErrorException Invalid type for key.
     * @throws \ErrorException Invalid type for value.
     * @throws \ErrorException Non-existing key.
     */
    public function offsetSet(mixed $index, mixed $newval): void {}

    /**
     * Remove the element at the given key.
     *
     * This will also be called for: unset($arr)
     *
     * @param int|string $index The key of the element to be removed.
     * @throws \ErrorException Invalid type for key.
     */
    public function offsetUnset(mixed $index): void {}

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
