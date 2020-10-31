<?php
namespace nvan\core\Repositories;

use nvan\core\IO\IFileReader;
use nvan\core\Parsing\Arrays\IArrayParser;

final class FileConfigRepository implements IConfigRepository
{
    private IFileReader $reader;
    private IArrayParser $parser;

    public function __construct(IFileReader $reader, IArrayParser $parser)
    {
            $this->reader = $reader;
            $this->parser = $parser;
    }

    public function getAll(): array
    {
        return $this->parser->toArray($this->reader->read());
    }
}
