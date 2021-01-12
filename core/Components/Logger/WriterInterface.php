<?php


namespace Aigletter\Core\Components\Logger;


interface WriterInterface
{
    public function write($message);
}