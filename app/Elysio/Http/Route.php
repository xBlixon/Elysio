<?php

namespace Elysio\Http;

abstract class Route implements Routeable
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

    protected function render(array $variables): void
    {
        extract($variables);
        require (_VIEWS . $this->view);
    }
}
