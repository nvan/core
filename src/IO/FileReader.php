<?php
namespace nvan\core\IO;

final class FileReader implements IFileReader
{
    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function &read(): string
    {
        $file = fopen($this->file, 'r');
        $content = fread($file, filesize($this->file));
        fclose($file);
        return $content;
    }
}
