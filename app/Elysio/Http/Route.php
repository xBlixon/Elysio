<?php

namespace Elysio\Http;

abstract class Route
{
    readonly string $path;
    readonly string $view;
    readonly ?string $name;

    public function __construct(string $path, string $view, ?string $name=NULL)
    {
        $this->path = $path;
        $this->view = $view;
        $this->name = $name;
    }

    public function render(): void
    {
        $file = _VIEWS . $this->view;
        require $file;
    }
}
