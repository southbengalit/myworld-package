<?php

namespace  Myworld\Ikigai;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //

    public function add($a, $b)
    {
        $result = $a + $b;
        return view('ikigai::add', compact('result'));
    }

    public function subtract($a, $b)
    {
        $result =  $a - $b;
        return view('ikigai::add', compact('result'));
    }
}
