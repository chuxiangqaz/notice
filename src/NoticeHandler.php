<?php

namespace Notice;


use Monolog\Handler\AbstractProcessingHandler;

abstract class NoticeHandler extends AbstractProcessingHandler
{
    /**
     * Writes the record down to the log of the implementing handler
     *
     * @param array $record
     */
    protected function write(array $record): void
    {
        $this->noticeHandler(
            $record['channel'],
            $record['level_name'],
            $record['message'],
            $record['context']['time'] ?: time(),
            $record['context']['module'],
            $record['context']['env'],
            $record['context']['code']
        );
    }

    /**
     * 推送消息事件处理
     *
     * @param string $channel
     * @param string $level
     * @param string $message
     * @param int $time
     * @param string $module
     * @param string $env
     * @param string $code
     * @return void
     */
    abstract protected function noticeHandler($channel, $level, $message, $time, $module, $env, $code = '');
}
