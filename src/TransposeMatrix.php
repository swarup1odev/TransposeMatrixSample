<?php
declare(strict_types=1);

namespace Matrix;
use InvalidArgumentException;

class TransposeMatrix
{
    public function generateMatrix( int $input ): int
    {
        if ( $input <= 0 ) {
            throw new InvalidArgumentException( "Input Number must be greater than zero" );
        }
        echo "\n";
        $ne = $input * ( $input - 1 );
        $a = range(1,$ne );
        $b = array_chunk( $a, $input );

        for ( $i = 0; $i < $input; $i++ ) {
            for ( $j = 0; $j < $input - 1; $j++ ) {
                echo $b[$j][$i]." ";
            }
            echo "\n";
    }
        return 0;
    }
}