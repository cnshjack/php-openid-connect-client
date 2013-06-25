<?php

namespace InoOicClient\Oic;


interface ErrorFactoryInterface
{


    /**
     * Creates an error response.
     * 
     * @param string $code
     * @param string $description
     * @param string $uri
     * @return Error
     */
    public function createError($code, $description = null, $uri = null);
}