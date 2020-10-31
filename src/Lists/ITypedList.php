<?php
namespace nvan\core\Lists;

interface ITypedList extends \Iterator
{
    public function __construct(string $type);

    public function empty(): void;
    public function add($item): void;
    public function addMultiple(array $items): void;
    public function set(array $items): void;
    public function getArray(): array;
}
