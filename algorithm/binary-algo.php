<?php


    // 0 1 0 1 1 0 1 1 1 0 1 1 1 1

class Binary
{
    public function binaryCal($num) {
        $i = 0;
        $j = 0;
        $k = 2;
        $numArr = array();

        while ($i < $num) {
            if($i == $j) {
                $numArr[] = 0;
                $j = $i + $k;
                $k += 1;
            } else {
                $numArr[] = 1;
            }
            $i += 1;
        }
        print_r($numArr);
    }

}

$solution = new Binary();
$solution->binaryCal(30);