<?php
namespace nvan\core\Helpers;

use nvan\core\Lists\ITypedList;

final class HelperLoader implements IHelperLoader
{
    private ITypedList $helperList;

    public function __construct($helperList)
    {
        $this->helperList = $helperList;
    }

    public function load(): array
    {
        $result = [];

        foreach($this->helperList as $helper)
            $result[$helper->name] = $helper->run();

        return $result;
    }
}
