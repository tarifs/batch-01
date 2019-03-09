<?php


class Calculator
{
    function cal($data)
    {
        $btn = $data['btn'];
        switch ($btn){
            case '+':
                $result = $data['first_number']+$data['last_number'];
                break;
            case '-':
                $result = $data['first_number']-$data['last_number'];
                break;
            case '*':
                $result = $data['first_number']*$data['last_number'];
                break;
            case '/':
                $result = $data['first_number']/$data['last_number'];
                break;
            case '%':
                $result = $data['first_number']%$data['last_number'];
                break;
        }
        return $result;
    }

}