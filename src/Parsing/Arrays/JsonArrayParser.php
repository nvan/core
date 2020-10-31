<?php
namespace nvan\core\Parsing\Arrays;

final class JsonArrayParser implements IArrayParser
{
    public function fromArray(array $array): string
    {
        return json_encode($array);
    }

    public function toArray(string $text): array
    {
        return json_decode($text, true);
    }
}
