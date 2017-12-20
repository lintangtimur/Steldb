<?php
/**
 * test
 */
class DBTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test DB
     */
    public function testDB()
    {
        $dotenv = new \Dotenv\Dotenv(__DIR__);
        $dotenv->load();
        $db    = new \Steldb\DB($logger = false);
        $hasil = $db->selectAll('siswa')->get();
        $this->assertEquals($hasil, $hasil);
    }
}
