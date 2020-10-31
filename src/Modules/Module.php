<?php
namespace nvan\core\Modules;

use nvan\core\Helpers\IHelper;
use nvan\core\Lists\TypedList;

abstract class Module implements IModule
{
    protected $helpers;

    public function __construct($helpers)
    {
        $this->helpers = new TypedList(IHelper::class);
    }
}
