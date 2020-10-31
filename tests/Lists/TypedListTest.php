<?php
namespace nvan\core\Test\Lists;

use PHPUnit\Framework\TestCase;

use nvan\core\Lists\TypedList;

final class TypedListTest extends TestCase
{
    // TODO: mock to get the array instead of using getArray

    public function testAdd()
    {
        $sample1 = new SampleClass('test1');
        $sample2 = new SampleClass('test2');
        $sample3 = new SampleClass('test3');

        $list = new TypedList(SampleClass::class);
        $list->add($sample1);
        $list->add($sample2);
        $list->add($sample3);

        $this->assertEquals($list->getArray(), [$sample1, $sample2, $sample3]);
    }

    public function testAddMultiple()
    {
        $sample1 = new SampleClass('test1');
        $sample2 = new SampleClass('test2');
        $sample3 = new SampleClass('test3');

        $list = new TypedList(SampleClass::class);
        $list->addMultiple([$sample1, $sample2]);
        $list->addMultiple([$sample3]);

        $this->assertEquals($list->getArray(), [$sample1, $sample2, $sample3]);
    }

    public function testEmpty()
    {
        $sample1 = new SampleClass('test1');

        $list = new TypedList(SampleClass::class);
        $list->add($sample1);
        $list->empty();

        $this->assertEmpty($list->getArray());
    }

    public function testSet()
    {
        $sample1 = new SampleClass('test1');
        $sample2 = new SampleClass('test2');
        $sample3 = new SampleClass('test3');

        $list = new TypedList(SampleClass::class);
        $list->set([$sample1, $sample2]);
        $this->assertEquals($list->getArray(), [$sample1, $sample2]);

        $list->set([$sample2, $sample3]);
        $this->assertEquals($list->getArray(), [$sample2, $sample3]);
    }

    public function testIteration()
    {
        $sample1 = new SampleClass('test1');
        $sample2 = new SampleClass('test2');
        $sample3 = new SampleClass('test3');

        $list = new TypedList(SampleClass::class);
        $list->set([$sample1, $sample2, $sample3]);

        $result = [];
        foreach($list as $sample)
        {
            $result[] = $sample->get();
        }

        $this->assertEquals($result, ['test1', 'test2', 'test3']);
    }
}

final class SampleClass
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function get(): string
    {
        return $this->value;
    }
}
