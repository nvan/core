<?php
namespace nvan\core\IO;

interface IFileWriter
{
    public function __construct(string $file);
    public function write(string $content): void;
    public function append(string $content): void;
}
