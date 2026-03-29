<?php

namespace Google\Protobuf\Internal;

/**
 * @template TValue
 * @implements \Iterator<int, TValue>
 */
final class RepeatedFieldIter implements \Iterator
{
    /**
     * Reset the status of the iterator
     *
     */
    public function rewind(): void {}

    /**
     * Return the element at the current position.
     *
     * @return TValue
     */
    public function current(): mixed {}

    /**
     * Return the current position.
     *
     */
    public function key(): mixed {}

    /**
     * Move to the next position.
     *
     */
    public function next(): void {}

    /**
     * Check whether there are more elements to iterate.
     *
     * @return bool True if there are more elements to iterate.
     */
    public function valid(): bool {}
}
