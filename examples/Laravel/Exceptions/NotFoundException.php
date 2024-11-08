<?php

namespace ApiResource\Examples\Laravel\Exceptions;


use ApiResource\Examples\Laravel\APIResponse;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class NotFoundException extends Exception
{
    public function report()
    {
        // put error in log file
    }
    public function render(Request $request):Response
    {
        return APIResponse::new()->errorNotFound($this->getMessage(), [$this->getTrace()]);
    }
}