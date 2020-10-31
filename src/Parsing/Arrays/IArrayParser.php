<?php
namespace nvan\core\Parsing\Arrays;

interface IArrayParser
{
    public function fromArray(array $array): string;
    public function toArray(string $text): array;
}
