<?php


namespace Aigletter\Core\Components\Hello;


use Aigletter\Core\Contracts\ComponentAbstract;

class Hello extends ComponentAbstract
{
    protected $param1;

    protected $param2;

    public function __construct($param1, $param2)
    {
        $this->param1 = $param1;
        $this->param2 = $param2;
    }

    public function test()
    {
        echo "Hello world";
    }
}