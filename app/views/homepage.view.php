<?php
use Elysio\Http\Request;
$request = Request::getInstance();
?>

<?= ($request->method === 'POST' ? "POST MODE!" : "") ?>

<h1>Hello world!</h1>
<p>Hello world!</p>
