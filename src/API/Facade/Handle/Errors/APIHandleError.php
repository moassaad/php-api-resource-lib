<?php

namespace ApiResource\App\API\Facade\Handle\Errors;

use ApiResource\App\API\Facade\APIModel;
use ApiResource\App\API\Facade\Cases\APICases;
use ApiResource\App\API\Facade\Handle\APIHandle;

class APIHandleError extends APIModel implements APIErrors, APIHandle
{
    public function error($status, $message, $errors)
    {
        $this->set(
            $status,
            $message,
            errors: $errors
        );
        // return $this->format();
        return $this;
    }
    public function badRequest($message, $errors = ["Bad Request."])
    {
        $this->set(
            APICases::BAD_REQUEST,
            $message,
            errors: $errors
        );
        return $this;
    }
    public function unauthorized($message, $errors = ["Unauthorized."])
    {
        $this->set(
            APICases::UNAUTHORIZED,
            $message,
            errors: $errors
        );
        return $this;
    }
    public function forbidden($message, $errors = ["Forbidden."])
    {
        $this->set(
            APICases::FORBIDDEN,
            $message,
            errors: $errors
        );
        return $this;
    }
    public function notFound($message, $errors = ["Not Found."])
    {
        $this->set(
            APICases::NOT_FOUND,
            $message,
            errors: $errors
        );
        return $this;
    }
    public function conflict($message, $errors = ["Conflict."])
    {
        $this->set(
            APICases::CONFLICT,
            $message,
            errors: $errors
        );
        return $this;
    }
    public function internalServerError($message, $errors = ["Internal Server Error."])
    {
        $this->set(
            APICases::INTERNAL_SERVER_ERROR,
            $message,
            errors: $errors
        );
        return $this;
    }
    public function handle()
    {
        return $this->format();
    }
}
