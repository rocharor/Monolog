<?php

namespace  Src;

use Monolog\Handler\BrowserConsoleHandler;
use Monolog\Handler\NativeMailerHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\TelegramBotHandler;
use Monolog\Logger;

class MonologCustom
{
    private $log;

    public function __construct(string $nameLog = 'log')
    {
        $this->log = new Logger($nameLog);
        $this->log->pushHandler(new BrowserConsoleHandler(Logger::DEBUG));
        $this->log->pushHandler(new StreamHandler('./Logs/log.php', Logger::WARNING));
        $this->log->pushHandler(new NativeMailerHandler('rocharor@gmail.com', 'Monolog Mail', 'Ricardo Rocha', Logger::CRITICAL));
        $this->log->pushHandler(new TelegramBotHandler(TELEGRAN['key'], TELEGRAN['channel'], Logger::EMERGENCY));
    }

    public function debug(string $message, array $context = []): void
    {
        $this->log->debug($message, $context);
    }

    public function info(string $message, array $context = []): void
    {
        $this->log->info($message, $context);
    }

    public function warning(string $message, array $context = []): void
    {
        $this->log->warning($message, $context);
    }

    public function critical(string $message, array $context = []): void
    {
        $this->log->critical($message, $context);
    }

    public function emergency(string $message, array $context = []): void
    {
        $this->log->emergency($message, $context);
    }
}
