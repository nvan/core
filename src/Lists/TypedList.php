<?php
namespace nvan\core\Lists;

final class TypedList implements ITypedList
{
    private array $items = [];
    private string $type;

    public function __construct(string $type)
    {
        $this->type = &$type;
    }

    public function empty(): void
    {
        unset($this->items);
        $this->items = [];
    }

    public function add($item): void
    {
        if($item === null)
            throw new \Exception('Items cannot be null'); // TODO: Create custom exception

        if($item instanceof $this->type)
            $this->items[] = $item;
        else
            throw new \Exception('Item error type'); // TODO: Create custom exception
    }

    public function addMultiple(array $items): void
    {
        foreach($items as $item)
            $this->add($item);
    }

    public function set(array $items): void
    {
        $this->empty();
        $this->addMultiple($items);
    }

    public function getArray(): array
    {
        return $this->items;
    }

    public function rewind()
    {
        reset($this->items);
    }

    public function current()
    {
        return current($this->items);
    }

    public function key()
    {
        return key($this->items);
    }

    public function next()
    {
        return next($this->items);
    }

    public function valid()
    {
        if($this->items === null)
            return false;

        $key = $this->key();
        return $key !== null && $key !== false;
    }
}
