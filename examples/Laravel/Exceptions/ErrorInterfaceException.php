<?php

namespace ApiResource\Examples\Laravel\Exceptions;


use Illuminate\Http\Request;

interface ErrorInterfaceException
{
    public function report();
    public function render(Request $request);
}