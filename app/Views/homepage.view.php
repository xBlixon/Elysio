<?php include "_base.php" ?>

POST:
<?= $postMode ?>
<br>
QUERY STRING:
<?= var_dump($query) ?>

<h1>Hello world!</h1>
<p>Hello world!</p>

<form method="POST">
    <input type="hidden" name="">
    <input type="submit" value="GO POST!">
</form>
