<?php
function autoload(string $classname)
{
    // equivalent of /app/Elysio/.../class.php
    require _APP . DIRECTORY_SEPARATOR . $classname . ".php";
}

spl_autoload_register('autoload');
