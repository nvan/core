<?php
namespace nvan\core\Helpers;

abstract class Helper implements IHelper
{
    protected string $name;

    public function __construct()
    {

    }

    public abstract function run(): array;
}
