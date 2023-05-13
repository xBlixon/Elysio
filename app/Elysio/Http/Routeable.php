<?php

namespace Elysio\Http;

interface Routeable
{
    public function __construct(string $path, string $view, ?string $name=NULL);
}
