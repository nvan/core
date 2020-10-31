<?php
namespace nvan\core\Helpers;

interface IHelper
{
    public function __construct();

    public function run(): array;
}
