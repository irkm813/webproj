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
    //Normal response
    public function renderView($view,$string="")
    {

        $renderlayout = $this->renderLayout();
        if($string == "") {
            $renderView = $this->renderOnlyView($view); 
            return str_replace('{{content}}', $renderView, $renderlayout);
        }
        else{
            return str_replace('{{content}}', $string, $renderlayout);
        }
    }
    public function renderLayout()
    {
        ob_start();
        include_once "./Views/layout/layout.php";
        return ob_get_clean();
    }

    public function renderOnlyView($view)
    {
        ob_start();
        include_once "./Views/$view.php";
        return ob_get_clean();
    }
    
}
