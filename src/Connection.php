<?php

namespace Steldb;

use PDO;
use PDOException;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Conenction to database
 */
class Connection implements ConnectionInterface
{
    /**
     * pdo instance
     * @var PDO
     */
    protected $pdo;

    /**
     * Log
     * @var Logger
     */
    protected $log;

    /**
     * Constructor init
     * @param bool $config log file
     */
    public function __construct($config = true)
    {
        try {
            if ($config) {
                $this->log = new Logger('Steldb_DB');
                $this->log->pushHandler(new StreamHandler('logs/steldb.log', Logger::DEBUG));
            }
            $this->pdo = new PDO("{$_ENV['DB_DRIVER']}:dbname={$_ENV['DB_NAME']};host={$_ENV['DB_HOST']}", $_ENV['DB_USER'], $_ENV['DB_PASS']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        return $this->pdo;
    }
}
