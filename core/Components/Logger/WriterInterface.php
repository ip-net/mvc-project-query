<?php


namespace Iliah\Core\Components\Logger;


interface WriterInterface
{
    public function write($message);
}