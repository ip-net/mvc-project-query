<?php


namespace Iliah\Core\Components\Logger;


class JsonFormatter implements FormatterInterface
{

    public function format($level, $message, $context = [])
    {
        return json_encode([
            'level' => $level,
            'message' => $message,
            'context' => $context
        ]);
    }
}