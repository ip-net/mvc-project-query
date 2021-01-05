<?php


namespace Aigletter\Core\Contracts;


interface ContainerInterface
{
    public function get($name);

    public function has($name);
}