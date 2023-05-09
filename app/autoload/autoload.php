<?php
function autoload(string $classname)
{
    $classname = str_replace("\\", OS_SLASH, $classname);
    require _APP . OS_SLASH . $classname . ".php"; // equivalent of /app/Elysio/.../class.php
}

spl_autoload_register('autoload');
