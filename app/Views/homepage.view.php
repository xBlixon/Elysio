<?php include "_styling.php" ?>

METHOD:
<?= $method ?>
<br>
QUERY STRING:
<?= var_dump($query) ?>

<h1>Hello world!</h1>
<p>Hello world!</p>

<form method="POST">
    <input type="hidden" name="">
    <input type="submit" value="GO POST!">
</form>

<?php
if(isset($flash))
{
  echo $flash;
}
?>
