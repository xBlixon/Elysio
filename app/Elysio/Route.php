<?php

namespace Elysio;

class Route
{
    private string $url;
    private string $view;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    public function __construct(string $url, string $view)
    {
        $this->url = $url;
        $this->view = $view;
    }

    public function render(): void
    {
        $file = _VIEWS . $this->view;
        require $file;
        die();
    }
}