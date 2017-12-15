<?php

namespace Steldb;

/**
 * Connection Interface
 */
interface ConnectionInterface
{
    /**
     * get PDO Connection
     * @return \PDO PDO Object
     */
    public function getConnection();
}
