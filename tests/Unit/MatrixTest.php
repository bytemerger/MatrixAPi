<?php

namespace Tests\Unit;

use App\Helpers\MatrixManager;
use PHPUnit\Framework\TestCase;

class MatrixTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_multiply()
    {
        $a = array(
            array(1, 0, 8),
            array(0, 2, 1),
            array(1, 3, 2)
        );

        $b = array(
            array(1, 0, 1),
            array(2, 3, 1),
            array(1, 4, 0)
        );

        $check = array(
            array(9, 32, 1),
            array(5, 10, 2),
            array(9, 17, 4)
        );
        $result = MatrixManager::multiply($a,$b);
        $this->assertEquals($result, $check);
    }
    public function test_cannot_multiply()
    {
        $a = array(
            array(1, 0, 8),
            array(0, 2, 1),
            array(1, 3, 2)
        );

        $b = array(
            array(1, 0, 1),
            array(2, 3, 1),
            array(1, 4, 0),
            array(1, 4, 0)
        );
        $result = MatrixManager::multiply($a,$b);
        $this->assertFalse($result);
    }
}
