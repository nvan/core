<?php
namespace nvan\core\Helpers;

interface IHelperLoader
{
    public function __construct($helperList);

    public function load(): array;
}
