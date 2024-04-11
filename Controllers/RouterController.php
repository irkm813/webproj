<?php
require_once "./Controllers/RequestController.php";


class RouterController
{

    public RequestController $request;
    public ResponseController $response;

    protected array $routes = [];

    public function __construct(RequestController $request,ResponseController $response)
    {
        $this->request = $request;
        $this->response = $response;

    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;
        
        if ($callback === false) {
            $this->response->setHttpStatus(404);
            return $this->response->renderView('_404');
            exit;
        }
        if (is_string($callback)) {
            return $this->response->renderView($callback);
        }
        if (is_array($callback)) {
            $callback[0] = new $callback[0]($this->response);

        }
        return call_user_func($callback,);
    }
}
