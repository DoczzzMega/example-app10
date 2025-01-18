<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function __construct()
    {
//        $this->middleware('token')->only('index');

//        $this->middleware('token2')->only('store');

        //$this->middleware('token3')->except('show'); // применить ко всем кроме show

        // посредники в контроллерах не очевидны, но иногда бывает удобно
    }

    function __invoke(Request $request): string
    {
//        return response('test');

//        return response()->json(['foo' => 'bar']);

        return [1,2,3];

//        return '<h1>test controller</h1>';
    }

    function index()
    {
        return response('test', 200, [
            'Content-Type' => 'text/plain',
            'foo' => 'bar',
        ]);

        return [1,2,3];


        return response()->json(['foo' => 'bar']);

        return 'test page';
    }

    function store(Request $request)
    {
        return 'store page';
    }

    function show($id)
    {
        return 'show page';
    }
}
