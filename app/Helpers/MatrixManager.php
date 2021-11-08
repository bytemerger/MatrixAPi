<?php

namespace App\Helpers;

class MatrixManager
{
    public static function multiply(array $matrix1, array $matrix2)
    {
        if(count($matrix1[0]) != count($matrix2))
        {
            return false;
        }
        $result = array ();

        for ($i = 0; $i < count ($matrix1); $i++) {
            $result[] = array ();
            for ($j = 0; $j < count ($matrix1[$i]); $j++) {
                $result[$i][] = 0;
                for ($k = 0; $k < count ($matrix1[$i]); $k++) {
                    $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
                }
            }
        }
        return $result;
    }
}
