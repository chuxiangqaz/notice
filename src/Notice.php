<?php

namespace Notice;

use Monolog\Logger;

class Notice
{
    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var string
     */
    protected $env;

    /**
     * Notice constructor.
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

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
    public function send($level, $message, $module, int $time = null, $code = '')
    {
        $context = compact('time', 'module', 'code');
        $context['env'] = $this->getEnv();
        $this->logger->log($level, $message, $context);
    }

    /**
     * 发送 notice 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function notice($message, $module, int $time = null, $code = '')
    {
        $context = compact('time', 'module', 'code');
        $context['env'] = $this->getEnv();
        $this->logger->notice($message, $context);
    }

    /**
     * 发送 debug 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function debug($message, $module, int $time = null, $code = '')
    {
        $context = compact('time', 'module', 'code');
        $context['env'] = $this->getEnv();
        $this->logger->debug($message, $context);
    }

    /**
     * 发送 info 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function info($message, $module, int $time = null, $code = '')
    {
        $context = compact('time', 'module', 'code');
        $context['env'] = $this->getEnv();
        $this->logger->info($message, $context);
    }

    /**
     * 发送 warning 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function warning($message, $module, int $time = null, $code = '')
    {
        $context = compact('time', 'module', 'code');
        $context['env'] = $this->getEnv();
        $this->logger->warning($message, $context);
    }

    /**
     * 发送 error 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function error($message, $module, int $time = null, $code = '')
    {
        $context = compact('time', 'module', 'code');
        $context['env'] = $this->getEnv();
        $this->logger->error($message, $context);
    }

    /**
     * 发送 critical 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function critical($message, $module, int $time = null, $code = '')
    {
        $context = compact('time', 'module', 'code');
        $context['env'] = $this->getEnv();
        $this->logger->critical($message, $context);
    }

    /**
     * 发送 alert 等级通知
     *
     * @param string $message
     * @param string $module
     * @param int|null $time
     * @param string $code
     * @return void
     */
    public function alert($message, $module, int $time = null, $code = '')
    {
        $context = compact('time', 'module', 'code');
        $context['env'] = $this->getEnv();
        $this->logger->alert($message, $context);
    }

    /**
     * @return Logger
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param Logger $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return string
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * @param string $env
     */
    public function setEnv($env)
    {
        $this->env = $env;
    }


    public function __call($name, $arguments)
    {
        return $this->logger->{$name}(...$arguments);
    }
}
