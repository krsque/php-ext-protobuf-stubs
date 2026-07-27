<?php

namespace Google\Protobuf\Internal;

/**
 * @template TValue
 * @implements \ArrayAccess<int, TValue>
 * @implements \IteratorAggregate<int, TValue>
 */
final class RepeatedField implements \ArrayAccess, \IteratorAggregate, \Countable
{
    /**
     * Constructs an instance of RepeatedField.
     *
     * @param int $type Type of the stored element.
     * @param class-string<TValue>|null $class Message/Enum class name (message/enum fields only).
     */
    public function __construct(int $type, ?string $class = null) {}

    /**
     * Append element to the end of the repeated field.
     *
     * @param TValue $newval
     */
    public function append(mixed $newval): void {}

    /**
     * Check the existence of the element at the given index.
     *
     * This will also be called for: isset($arr)
     *
     * @param int $index The index of the element to be removed.
     * @return bool True if the element at the given offset exists.
     * @throws \ErrorException Invalid type for index.
     */
    public function offsetExists(int $index): bool {}

    /**
     * Return the element at the given index.
     *
     * This will also be called for: $ele = $arr[0]
     *
     * @param int $index The index of the element to be fetched.
     * @return TValue The stored element at given index.
     * @throws \ErrorException Invalid type for index.
     * @throws \ErrorException Non-existing index.
     */
    public function offsetGet(int $index): mixed {}

    /**
     * Assign the element at the given index.
     *
     * This will also be called for: $arr []= $ele and $arr[0] = ele
     *
     * @param int|null $index The index of the element to be assigned.
     * @param TValue $newval The element to be assigned.
     * @throws \ErrorException Invalid type for index.
     * @throws \ErrorException Non-existing index.
     * @throws \ErrorException Incorrect type of the element.
     */
    public function offsetSet(?int $index, mixed $newval): void {}

    /**
     * Remove the element at the given index.
     *
     * This will also be called for: unset($arr)
     *
     * @param int $index The index of the element to be removed.
     * @throws \ErrorException Invalid type for index.
     * @throws \ErrorException The element to be removed is not at the end of the
     * RepeatedField.
     */
    public function offsetUnset(int $index): void {}

    /**
     * Return the number of stored elements.
     *
     * This will also be called for: count($arr)
     *
     * @return int The number of stored elements.
     */
    public function count(): int {}

    /**
     * @return \Google\Protobuf\Internal\RepeatedFieldIter<TValue>
     */
    public function getIterator(): \Traversable {}
}
