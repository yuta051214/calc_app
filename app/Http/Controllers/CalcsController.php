<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result($value1, $operater, $value2){
        switch($operater){
        case 'addition':
            $result = $value1 + $value2;
            break;
        case 'subtraction':
            $result = $value1 - $value2;
            break;
        case 'multiplication':
            $result = $value1 * $value2;
            break;
        case 'division':
            $result = $value1 / $value2;
            break;
        }

        return view("calcs.calcs", ["result" => $result]);
    }
}
