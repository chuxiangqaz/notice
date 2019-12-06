<?php

namespace Notice;


interface NoticeInterface
{
    /**
     * 发送自定义等级通知
     *
     * @param string $level
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function send($level, $message, $module, int $time = null, $code = '');

    /**
     * 发送 notice 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function notice($message, $module, int $time = null, $code = '');

    /**
     * 发送 debug 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function debug($message, $module, int $time = null, $code = '');

    /**
     * 发送 info 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function info($message, $module, int $time = null, $code = '');

    /**
     * 发送 warning 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function warning($message, $module, int $time = null, $code = '');

    /**
     * 发送 error 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function error($message, $module, int $time = null, $code = '');

    /**
     * 发送 critical 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function critical($message, $module, int $time = null, $code = '');

    /**
     * 发送 alert 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function alert($message, $module, int $time = null, $code = '');
}
