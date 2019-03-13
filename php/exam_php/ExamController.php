<?php

class ExamController
{
    public function exam($data)
    {

        $a = $data['first_number'];
        $b = $data['secound_number'];
        $c = $data['third_number'];
        $d = $data['fourth_number'];
        $e = $data['fifth_number'];

        $result = $a+$b+$c+$d+$e;

        return $result;





    }
}