<?php
namespace Steldb;

use Steldb\Connection;

/**
 * Database Initialize
 *
 * @author lintangtimur lintangtimur915@gmail.com
 * @license MIT
 *
 */
class DB extends Connection
{
    /**
   * [private description]
   * @var array
   */
  private $temp;

  /**
   * Construct to parrent class
   */
    public function __construct()
    {
        Connection::__construct();
    }

    /**
     * Select all from table name
     * @param  string $table nama table
     * @return $this        return an array
     */
    public function selectAll($table)
    {
        $hasil = $this->pdo->prepare("Select * from $table");
        $hasil->execute();
        $rowcount = $this->setRow($hasil);
        $hasil = $hasil->fetchAll(\PDO::FETCH_CLASS);

        $this->temp = $hasil;

        return $this;
    }

    /**
     * Insert ke dalam table
     * @param  string $table     [description]
     * @param  array $parameter [description]
     * @return bool return true if success
     */
    public function insert($table, array $parameter)
    {
        $sql = sprintf("insert into %s (%s) values (%s)",
        $table,
      implode(', ', array_keys($parameter)),
      ':'.implode(', :', array_keys($parameter)));

        $stmt = $this->pdo->prepare($sql);
        if ($stmt->execute($parameter)) {
            return true;
        }

        return false;
    }
    /**
     * Query mentah
     * @param string $query    example
     * select * from siswa where NIM = ?
     * @param array  $bindValue value
     * @return array|null|$this
     */
    public function RAW($query, array $bindValue)
    {
        $result = $this->pdo->prepare($query);
        $result->execute($bindValue);

        $hasil = $this->checkArrayIndex($result->fetchAll(\PDO::FETCH_CLASS));
        $this->temp = $hasil;

        return $this;
    }

    /**
     * Check apakah hasil dari FetchClass terdapat indeks 0 nya
     * @param  array  $result fetchAll(PDO::FETCH_CLASS)
     * @return object
     */
    private function checkArrayIndex(array $result)
    {
        if (is_array($result)) {
            if (array_key_exists(0, $result)) {
                return $result;
            }

            return null;
        }
    }

    /**
     * Get fist data from collection
     * @return object
     */
    public function first()
    {
        return $this->temp[0];
    }

    /**
     * Get latest from collection
     * @return object
     */
    public function latest()
    {
        return $this->temp[count($this->temp) - 1];
    }

    /**
     * get all result
     * @return mixed get result
     */
    public function get()
    {
        return $this->temp;
    }

    /**
     * Get jumlah baris dari eksekusi query
     * @return int
     */
    public function getRow()
    {
        return $this->temp['rowCount'];
    }

    /**
     * Set row for internal purpose
     * @param \PDOStatement $row result from statement execute
     * @return int
     */
    public function setRow(\PDOStatement $row)
    {
        return $row->rowCount();
    }
}
