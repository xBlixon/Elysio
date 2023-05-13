<?php

namespace Elysio\Http;

abstract class Route
{
    private string $path;
    private string $view;
    private ?string $name = NULL;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

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
