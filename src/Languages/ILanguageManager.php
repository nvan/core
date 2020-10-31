<?php
namespace nvan\core\Languages;

interface ILanguageManager
{
    public function __construct();

    public function getAvailableLanguages(): array;
}
