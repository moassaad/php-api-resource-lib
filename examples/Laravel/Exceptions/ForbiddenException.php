<?php

namespace ApiResource\Examples\Laravel\Exceptions;


use ApiResource\Examples\Laravel\APIResponse;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ForbiddenException extends Exception
{
    public function report()
    {
        // put error in log file
    }
    public function render(Request $request):Response
    {
        return APIResponse::new()->errorForbidden($this->getMessage(), [$this->getTrace()]);
    }
}