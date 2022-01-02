<?php

namespace App;

use AltoRouter;
use Exception;

class Router {

    private AltoRouter $router;
    private string $viewPath;

    public function __construct(AltoRouter $router, string $viewPath) {
        $this->router = $router;
        $this->viewPath = $viewPath;
    }

    public function get(string $url, string $view, ?string $name = null): self {
        try {
            $this->router->map('GET', $url, $view, $name);
        } catch (Exception $e) {
            dump($e->getMessage());
        }

        return $this;
    }

    public function post(string $url, string $view, ?string $name = null): self {
        try {
            $this->router->map('POST', $url, $view, $name);
        } catch (Exception $e) {
            dump($e->getMessage());
        }

        return $this;
    }

    public function run(): self {

        $match = $this->router->match();
        $router = $this;
        $parameters = $match['params'];
        ob_start();
        require $this->viewPath . $match['target'] . '.php';
        $content = ob_get_clean();
        require $this->viewPath . 'default.php';

        return $this;
    }

    public function url(string $name, array $parameters = []): string {
        try {
            return $this->router->generate($name, $parameters);
        } catch (Exception) {
            return '/';
        }
    }

}