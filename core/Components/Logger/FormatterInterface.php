<?php


namespace Iliah\Core\Components\Logger;


interface FormatterInterface
{
    public function format($level, $message, $context = []);
}