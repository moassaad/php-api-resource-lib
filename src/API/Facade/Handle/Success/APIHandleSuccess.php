<?php

namespace ApiResource\App\API\Facade\Handle\Success;

use ApiResource\App\API\Facade\APIModel;
use ApiResource\App\API\Facade\Cases\APICases;
use ApiResource\App\API\Facade\Handle\APIHandle;

class APIHandleSuccess extends APIModel implements APISuccess, APIHandle
{
    public function success($status = APICases::OK, $message = "", $data = [])
    {
        $this->set(
            $status,
            $message,
            $data
        );
        return $this;
    }
    public function ok($message = "", $data = null)
    {
        $this->set(
            APICases::OK,
            $message,
            $data
        );
        return $this;
    }
    public function created($message = "", $data = null)
    {
        $this->set(
            APICases::CREATED,
            $message,
            $data
        );
        return $this;
    }
    public function noContent($message = "", $data = null)
    {
        $this->set(
            APICases::NO_CONTENT,
            $message,
            $data
        );
        return $this;
    }
    public function notModified($message = "", $data = null)
    {
        $this->set(
            APICases::NOT_MODIFIED,
            $message,
            $data
        );
        return $this;
    }
    
    public function handle()
    {
        return $this->format();
    }
}
