<?php

namespace Matrix;

use PHPUnit\Framework\TestCase;

class TransposeMatrixTest extends TestCase
{
    public function testMatrix()
    {
        $object = new TransposeMatrix;
        $this->assertSame( 0, $object->generateMatrix(6) );
        $this->assertSame( 0, $object->generateMatrix(1) );
        $this->assertSame( 0, $object->generateMatrix(10) );
    }
}
