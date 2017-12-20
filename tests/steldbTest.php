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
        $this->assertEquals(\Steldb\DB::Version(), '1.1.2');
    }
}
