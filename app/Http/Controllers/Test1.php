<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysql_xdevapi\Result;

class Test1 extends Controller
{
    public function findMax5(Request $request){
        $test = $request->input('max5');
        $test1 = explode(',',$test);
        $count = count($test1);
        if ($count <5)
        {
            return 'Không thỏa yêu cầu đề bài';
        }
        rsort($test1,SORT_NUMERIC);
        $result = array_slice($test1, 0,5,true);
        return $result;
    }
    public function findFrequent(Request $request)
    {
        $input = $request->input('frequent');
        $input1 = explode(',',$input);
        $tempt =[];
        foreach ($input1 as $i)
        {
            if (!empty($tempt[$i]))
            {
                $tempt[$i] += 1;
            }
            else
            {
                $tempt[$i] = 1;
            }
        }
        $result = 0;
        $count = 0;
        foreach ($tempt as $t => $value)
        {
            if ($value > $count)
            {
                $count = $value;
                $result = $t;
            }
        }
        return $result;
    }
}
