<?php

namespace App\Helpers;

class MatrixManager
{
    public static function multiply(array $matrix1, array $matrix2)
    {
        if(count($matrix2) != count($matrix1[0]))
        {
            return false;
        }
        $result = array ();

        for ($i = 0; $i < count ($matrix1); $i++) {
            $result[] = array ();
            for ($j = 0; $j < count ($matrix2[$i]); $j++) {
                $result[$i][$j] = 0;
                for ($k = 0; $k < count ($matrix2); $k++) {
                    $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
                }
            }
        }
        return $result;
    }
}
