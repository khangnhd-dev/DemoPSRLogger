<?php
require './bootstrap.php';

use Psr\Log\LoggerInterface;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MyLogger implements LoggerInterface
{
    public function emergency($message, array $context = []): void
    {
        echo "MyLogger " . $message;
    }


    public function alert($message, array $context = array()): void
    {
    }


    public function critical($message, array $context = array()): void
    {
    }


    public function error($message, array $context = array()): void
    {
    }


    public function warning($message, array $context = array()): void
    {
        echo "MyLogger " . $message;
    }


    public function notice($message, array $context = array()): void
    {
    }


    public function info($message, array $context = array()): void
    {
    }


    public function debug($message, array $context = array()): void
    {
    }


    public function log($level, $message, array $context = array()): void
    {
    }
}

class User
{
    private $logger;

    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    public function getUser()
    {
        $this->logger->warning("Get users success");
    }
}

$myLogger = new MyLogger();
$user = new User($myLogger);
// $monoLog = new Logger('name');
// $monoLog->pushHandler(new StreamHandler('your.log', Logger::WARNING));
// $user = new User($monoLog);

$user->getUser();
