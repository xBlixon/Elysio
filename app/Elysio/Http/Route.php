<?php

namespace Elysio\Http;

abstract class Route
{
    private string $path;
    private string $view;

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    public function __construct(string $path, string $view)
    {
        $this->path = $path;
        $this->view = $view;
    }

    public function render(): void
    {
        $file = _VIEWS . $this->view;
        require $file;
    }
}
