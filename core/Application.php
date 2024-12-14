<?php

namespace Core;

class Application
{
    protected string $uri;
    public static Application $app;
    public Request $request;

    public function __construct()
    {
        self::$app = $this;
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->request = new Request($this->uri);
    }
}