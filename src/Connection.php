<?php
namespace Steldb;

use PDO;
use PDOException;
use Steldb\ConnectionInterface;

/**
 * Conenction to database
 */
class Connection implements ConnectionInterface
{
    /**
     * [protected description]
     * @var PDO
     */
    protected $pdo;

    /**
     * Constructor
     */
    public function __construct()
    {
        try {
            $this->pdo = new PDO("{$_ENV['DB_DRIVER']}:dbname={$_ENV['DB_NAME']};host={$_ENV['DB_HOST']}", $_ENV['DB_USER'], $_ENV['DB_PASS']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     * @inheritDoc
     */
    public function getConnection()
    {
        return $this->pdo;
    }
}
