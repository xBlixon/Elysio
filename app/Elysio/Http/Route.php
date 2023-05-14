<?php

namespace Elysio\Http;

abstract class Route implements Routeable
{
    readonly string $path;
    readonly string $view;
    readonly ?string $name;

    public function __construct(string $path, ?string $name=NULL)
    {
        $this->path = $path;
        $this->name = $name;
    }

    protected function render(string $view, array $variables): void
    {
        extract($variables);
        require (_VIEWS . $view);
    }
}
