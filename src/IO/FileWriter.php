<?php
namespace nvan\core\IO;

final class FileWriter implements IFileWriter
{
    private const WRITE_MODE = 'w';
    private const APPEND_MODE = 'a';

    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function do(string $content, string $mode)
    {
        $file = fopen($this->file, $mode);
        fwrite($content);
        fclose($file);
    }

    public function write(string $content): void
    {
        $this->do($content, self::WRITE_MODE);
    }

    public function append(string $content): void
    {
        $this->do($content, self::APPEND_MODE);
    }
}
