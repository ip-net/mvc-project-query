<?php


namespace Aigletter\Core\Components\Logger;


interface FormatterInterface
{
    public function format($level, $message, $context = []);
}