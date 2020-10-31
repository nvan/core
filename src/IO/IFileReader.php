<?php
namespace nvan\core\IO;

interface IFileReader
{
    public function __construct(string $file);
    public function read(): string;
}
