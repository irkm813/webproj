<?php

class ResponseController
{

    // Special responses
    public function setHttpStatus(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}
